<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class penelusuran extends Controller
{
    public function index(Request $request) {
        $judulArtikel = $request->input('judulArtikel');
        $artikel = Article::where('judulArtikel', 'LIKE', '%'.$judulArtikel.'%')->orderBY('id','desc')->paginate(20);
        return view('penelusuran',[
            'artikel' => $artikel
            ])->with('judulArtikel', $judulArtikel);
}
}
