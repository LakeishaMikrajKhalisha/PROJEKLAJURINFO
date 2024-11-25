<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    $artikel = Article::where('judulArtikel', 'LIKE', '%'.$judulArtikel.'%')->orderBY('id','desc')->paginate(20);
    return view('user_login.daftarArtikelDraft', [
        'artikel' => $artikel,
        'judulArtikel' => $judulArtikel
    ]);
}
public function create(Request $request) {
    DB::table('articles')->insert([
        'judulArtikel'=>$request->judulArtikel,
        'isiArtikel'=>$request->isiArtikel
    ]);
    return view('user_login.daftarArtikelDraft');
}
public function add(){
    return view('user_login.buatArtikel');
}
public function edit($id){
    $articles=DB::table('articles')->where('id', $id)->first();
    if (!$articles){
        abort(404);
    }
    return view('user_login.editArtikel', [
        'articles' => $articles
    ]);
}
public function update(Request $request, $id){
        DB::table('articles')->where('id', $id)->update([
            'judulArtikel'=>$request->judulArtikel,
            'isiArtikel'=>$request->isiArtikel
        ]);
        return redirect()->route('draft');
}
public function delete($id){
    $artikel=DB::table('articles')->where('id', $id)->delete();
    return redirect()->route('draft');
}
public function delete2($id){
    $artikel=DB::table('articles')->where('id', $id)->delete();
    return redirect()->route('publish');
}
}