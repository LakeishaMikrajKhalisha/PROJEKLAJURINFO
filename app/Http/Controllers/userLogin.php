<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class userLogin extends Controller
{
    public function index(Request $request) {
        $judulArtikel = $request->judulArtikel;
        $artikel = Article::where('judulArtikel', 'LIKE', '%'.$judulArtikel.'%')->orderBY('id','desc')->paginate(20);
        return view('user_login.daftarArtikelPublish', [
            'artikel' => $artikel,
            'judulArtikel' => $judulArtikel
        ]);
    }
    public function index2(Request $request) {
        $judulArtikel = $request->judulArtikel;
        $categories = Category::with('articles')->get();
        $artikel = Article::with('categories') 
        ->where('judulArtikel', 'LIKE', '%' . $judulArtikel . '%')
        ->orderBy('id', 'desc')
        ->paginate(15);
        return view('user_login.daftarArtikelDraft', [
            'artikel' => $artikel,
            'judulArtikel' => $judulArtikel,
            'categories' => $categories
        ]);
    }
public function create(Request $request) {

    $artikel = Article::create([
        'judulArtikel'=>$request->judulArtikel,
        'isiArtikel'=>$request->isiArtikel,
    ]);
    $category = Category::where('name', $request->category_id)->first();
    if ($category) {
        $artikel->categories()->attach($category->id);
    } else {
        return redirect()->back()->withErrors(['category_id' => 'The selected category does not exist.']);
    }
    return redirect()->route('draft.index2');
}
public function add(){
    return view('user_login.buatArtikel');
}
public function edit($id){
    $articles=DB::table('articles')->where('id', $id)->first();
    if (!$articles){
        abort(404);
    }
    $categories = Category::all(); 
    return view('user_login.editArtikel', [
        'articles' => $articles
    ]);
}
public function update(Request $request, $id){
        DB::table('articles')->where('id', $id)->update([
            'judulArtikel'=>$request->judulArtikel,
            'isiArtikel'=>$request->isiArtikel
        ]);
        return redirect()->route('draft.index2');
}
public function delete($id){
    $artikel=DB::table('articles')->where('id', $id)->delete();
    return redirect()->route('draft.index2');
}
public function delete2($id){
    $artikel=DB::table('articles')->where('id', $id)->delete();
    return redirect()->route('publish.index');
}
}