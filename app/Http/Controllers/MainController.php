<?php
namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function index()
    {
        $articles = Article::where('active', true)->latest('published')->paginate(4);
        return view('article.index', compact('articles'));
        // $categories = ArticleCategory::where('active', true)->get();
        // return view('article.index', compact('categories'));
    }

    public function category($category)
    {
        return view('article.category', compact('category'));
    }

    public function show($category, $article)
    {
        $article = Article::where('slug', $article)->firstOrFail();
        return view('article.show', compact('article'));
    }

    public function tag($tag)
    {
        return view('article.tag', compact('tag'));
    }
}
