<?php

namespace App\Http\Controllers;

use App\Article;
use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index()
    {
        $blog = Blog::first();
        $articles = Article::orderBy('created_at', 'desc')->limit(3)->get();
        return view('backend.home', compact('blog', 'articles'));
    }

}
