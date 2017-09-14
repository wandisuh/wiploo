<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Subscribe;
use App\Models\Seo;

class ArticlesController extends Controller
{
    //
    public function index(Request $request) {

    }

    public function category(Request $request, $slug) {
        $categories = Category::where('published', 1)->get();
        $articles = Article::where('popular', 0)->paginate(4);
        $featured = Article::where('featured', 0)->limit(6)->get();
        $category = Category::where('slug', $slug)->first();
        return view('frontend.article.article_per_category', compact('articles','categories','category'));
    }

    public function show(Request $request, $slug) {
        $categories = Category::where('published', 1)->get();
        $article = Article::where('slug', $slug)->first();
        $popular = Article::where('popular', 0)->limit(5)->get();
        $related = Article::where('category_id', $article->category_id)->limit(4)->get();
        return view('frontend.article.show', compact('article','popular','related','categories'));
    }

    public function popular(Request $request) {
        $categories = Category::where('published', 1)->get();
        $popular = Article::where('popular', 0)->paginate(10);
        return view('frontend.article.popular', compact('popular','related','categories'));
    }

}
