<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class comment extends Controller
{
    public function store(Request $request, $article_id){
        $request->validate([
            'comment_text'=> 'required',
        ]);

        $request['article_id']=$article_id;
        Comment::create($request->all());
        return redirect()->route('artikel.show', $article_id);
    }
}
