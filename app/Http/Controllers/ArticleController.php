<?php

namespace App\Http\Controllers;

use App\Article;
use App\Theme;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->paginate(3);
        return view('backend.home', compact('articles'));
    }

    public function add()
    {
        $themes = Theme::all();
        return view('backend.article.new', compact('themes'));
    }

    public function create()
    {
        // Creation de l'article
    }

    public function edit()
    {
        return view('backend.article.edit');
    }

    public function remove()
    {
        return view('backend.article.remove');
    }
}
