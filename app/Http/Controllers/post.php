<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class post extends Controller
{

    public function show($id){
        $judulArtikel = DB::table('articles')->inRandomOrder()->take(5)->get();
        $detailArtikel = Article::with('categories')->findOrFail($id);
        $categories = $detailArtikel->categories;
        return view('post',[
            'detailArtikel' => $detailArtikel,
            'judulArtikel' => $judulArtikel,
            'categories' => $categories
        ]);
    }
}
