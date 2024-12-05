<?php

namespace App\View\Components;

use Closure;
use App\Models\Article;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ArticleCard extends Component
{

    public $articles;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
        $this->articles = Article::with('category')->where('status', '=', 'published')->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.article-card');
    }
}
