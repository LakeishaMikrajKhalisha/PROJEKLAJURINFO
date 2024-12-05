<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class penelusuran extends Controller
{
    public function index(Request $request) {
        $judul = $request->input('judulArtikel');
        $categories = Category::with('articles')->get();
            $artikel = Article::with('categories') 
            ->where('judulArtikel', 'LIKE', '%' . $judul . '%')
            ->orderBy('id', 'desc')
            ->paginate(15);
        return view('penelusuran',[
            'artikel' => $artikel,
            'categories' => $categories
            ])->with('judulArtikel', $judul);
}
}
