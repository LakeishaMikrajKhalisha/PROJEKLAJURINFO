<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dashboard extends Controller
{
        public function index(Request $request) {
            $judulArtikelSatu = DB::table('articles')->inRandomOrder()->take(1)->get();
            $judulArtikel = $request->judulArtikel;
            $categories = Category::with('articles')->get();
            $artikel = Article::with('categories') 
            ->where('judulArtikel', 'LIKE', '%' . $judulArtikel . '%')
            ->orderBy('id', 'desc')
            ->paginate(15);
            return view('dashboard', [
                'artikel' => $artikel,
                'judulArtikel' => $judulArtikel,
                'judulArtikelSatu' => $judulArtikelSatu,
                'categories' => $categories
            ]);
        }
}
