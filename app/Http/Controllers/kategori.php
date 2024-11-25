<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class kategori extends Controller
{
    public function index(Request $request) {
        $judulArtikel = $request->judulArtikel;
        $artikel = Article::where('judulArtikel', 'LIKE', '%'.$judulArtikel.'%')->orderBY('id','desc')->paginate(20);
        return view('kategori', [
            'artikel' => $artikel,
            'judulArtikel' => $judulArtikel
        ]);
}
}
