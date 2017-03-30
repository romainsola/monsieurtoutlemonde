<?php

namespace App\Http\Controllers;

use Alexusmai\LaravelPurifier\Purifier;
use App\Article;
use App\Theme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ArticleController extends Controller
{
    /**
     * index
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->paginate(5);
        return view('backend.home', compact('articles'));
    }


    /**
     * add
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add()
    {
        $themes = Theme::all();
        $article = new Article();
        return view('backend.article.form', compact('themes', 'article'));
    }


    /**
     * store
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        // Creation de l'article
        $this->validate($request, [
            'title'    => 'required|max:255',
            'content'  => 'required',
            'active'   => 'required',
        ]);

        // Upload de l'image de couverture
        $file = $request->file('image');
        $path = $file->storeAs('public/photos', $file->hashName());

        $article = new Article();
        $article->fill([
            'title' => request('title'),
            'content' => request('content'),
            'active' => request('active'),
            'image' => 'photos/'.$file->hashName(),
            'fk_users_id' => 1,
            'fk_themes_id' => request('theme'),
            'fk_blogs_id' => 1
        ]);
        $article->save();
        $request->session()->flash('success', "L'article {$article->title} a bien été créé !");

        return redirect(route('backend.home'));
    }


    /**
     * edit
     * @param Article $article
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Article $article)
    {
        $themes = Theme::all();
        return view('backend.article.form', compact('themes', 'article'));
    }


    /**
     * update
     * @param Article $article
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Article $article, Request $request)
    {
        // Creation de l'article
        $this->validate($request, [
            'title'    => 'required|max:255',
            'content'  => 'required',
            'active'   => 'required',
        ]);

        // Upload de l'image de couverture
        $file = $request->file('image');
        $path = $file->storeAs('public/photos', $file->hashName());

        $article->fill([
            'title' => request('title'),
            'content' => request('content'),
            'active' => request('active'),
            'image' => 'photos/'.$file->hashName(),
            'fk_themes_id' => request('theme'),
        ]);
        $article->save();

        return redirect()->route('backend.home');
    }


    /**
     * remove
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function remove()
    {
        return view('backend.article.remove');
    }


    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('backend.home');
    }
}
