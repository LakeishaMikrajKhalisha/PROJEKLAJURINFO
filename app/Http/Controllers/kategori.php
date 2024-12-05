<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class kategori extends Controller
{
    public function show($id)
    {
    $category = Category::with('articles')->findOrFail($id);

    // Retrieve articles related to the category
    $articles = $category->articles()->paginate(20);

    // Return the view with category and articles
    return view('kategori', [
        'category' => $category,
        'articles' => $articles
    ]);
}
}