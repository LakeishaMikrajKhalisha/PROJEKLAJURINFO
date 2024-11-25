<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class post extends Controller
{

    public function show($id){
        $judulArtikel = DB::table('articles')->inRandomOrder()->take(5)->get();
        $detailArtikel = DB::table('articles')->where('id', $id)->first();
        return view('post',[
            'detailArtikel' => $detailArtikel,
            'judulArtikel' => $judulArtikel
        ]);
    }
}
