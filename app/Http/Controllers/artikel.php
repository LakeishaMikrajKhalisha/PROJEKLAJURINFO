<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class artikel extends Controller
{
    public function index(Request $request) {
        $judulArtikel = $request->judulArtikel;
        $artikel = Article::where('judulArtikel', 'LIKE', '%'.$judulArtikel.'%')->orderBY('id','desc')->paginate(20);
        return view('daftarArtikelProfil', [
            'artikel' => $artikel,
            'judulArtikel' => $judulArtikel,
        ]);
}

}
