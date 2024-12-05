<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{

    public function create()
    {
        return view('user_login.buatArtikel');
    }
    //
    public function index(Request $request)
    {
        // $articles = Article::with('category')->where('status', '=', 'published')->get();
        // return view('homepage', compa)
    }

    public function getFirstImage($content)
    {
        $dom = new \DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        libxml_clear_errors();

        $images = $dom->getElementsByTagName('img');

        if ($images->length > 0) {
            return $images->item(0)->getAttribute('src');
        }

        return null;
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required'
        ]);

        $content = $request->content;
        $firstImage = $this->getFirstImage($content);

        Article::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'content' => $request->content,
            'first_image' => $firstImage,
            'category_id' => $request->category,
            'user_id' => Auth::user()->user_id,
        ]);

        return redirect(route('homepage', absolute: false));
    }

    public function uploadImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        $path = $request->file('image')->store('images', 'public');

        return response()->json(['url' => asset('storage/' . $path)]);
    }
}
