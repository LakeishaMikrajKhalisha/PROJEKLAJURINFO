<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class post extends Controller
{

    public function show($id){
        $category = Article::with('categories')->findOrFail($id);
        $judulArtikel = DB::table('articles')->inRandomOrder()->take(5)->get();
        $detailArtikel = Article::with('comments')->where('id', $id)->first();
        return view('post',[
            'detailArtikel' => $detailArtikel,
            'judulArtikel' => $judulArtikel,
            'category' => $category
        ]);
    }
}
