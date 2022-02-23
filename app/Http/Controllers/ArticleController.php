<?php

namespace App\http\Controllers;

use App\Models\Article;
use \Illuminate\Http\Request;

class ArticleController
{
    /**
     * This function is made to render a list of a resource
     */
    public function index()
    {
        return view('articles.index', ['articles' => Article::latest()->get()]);
    }

    /**
     * This function is made to render a single resource
     */
    public function show(Article $article)
    {
        return view('articles.show', [
            'article' => $article]);
    }

    /**
     * This function is made to show a view to create a new resource
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * This function is made to persist the new resource
     */
    public function store(Request $request)
    {
        $validatedAttributes = $this->validateArticle($request);

        $temp = Article::latest()->first();
        if ($temp->class === 'blog-pos1') {
            $nextClass = 'blog-pos2';
        } elseif ($temp->class === 'blog-pos2') {
            $nextClass = 'blog-pos3';
        } else {
            $nextClass = 'blog-pos1';
        }

        $validatedAttributes['class']= $nextClass;

        Article::create($validatedAttributes);

        // redirecting to show a page
        return redirect('/article');
    }

    /**
     * This function is made to show a view to edit an existing resource
     */
    public function edit(Article $article)
    {
        return view('articles.edit', ['article' => $article]);
    }

    /**
     * This function is made to persist the edited resource
     */
    public function update(Article $article, Request $request)
    {
        //$validatedAttributes = $this->validateArticle();

        $article->update($this->validateArticle($request));

        //redirecting back to the article page we edited
        return redirect('/article/' . $article->id);
    }

    /**
     * This function is made to delete the resource
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect('/article');
    }

    /**
     * @return array
     */
    public function validateArticle(Request $request): array
    {
        $validatedAttributes = $request->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'innerTitle' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'link' => 'required',
        ]);
        return $validatedAttributes;
    }
}
