<?php

namespace App\http\Controllers;

use App\Models\Article;

class BlogController
{
    /**
     * This function is made to render a list of a resource
     */
    public function index()
    {
        return view('articles.index', ['articles' => Article::all()]);
    }

    /**
     * This function is made to render a single resource
     */
    public function show($link)
    {
        $article = Article::where('link', $link);
        return view('articles.show', [
            'article' => $article->firstOrFail()
        ]);
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
    public function store(Article $article)
    {
        $article = Article::latest()->first();
        if ($article->class === 'blog-pos1') {
            $nextClass = 'blog-pos2';
        } elseif ($article->class === 'blog-pos2') {
            $nextClass = 'blog-pos3';
        } else {
            $nextClass = 'blog-pos1';
        }

        //creating a new article
        $article = new Article();
        //setting its values to be according to the data from the form
        $article->title = request('title');
        $article->innerTitle = request('innerTitle');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->link = request('link');
        //extra defaults for inside use
        $article->class = $nextClass;
        //save it to the database
        $article->save();
        // redirecting to show a page
        return redirect('/blog');
    }

    /**
     * This function is made to show a view to edit an existing resource
     */
    public function edit($link)
    {
        $article = Article::where('link', $link);
        return view('articles.edit', ['article' => $article->firstOrFail()]);
    }

    /**
     * This function is made to persist the edited resource
     */
    public function update($link)
    {
        //getting the current article we are editing
        $article = Article::where('link', $link)->firstOrFail();
        //editing the fields according to what is retreived from the form
        $article->title = request('title');
        $article->innerTitle = request('innerTitle');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->link = request('link');
        //saving it
        $article->save();
        //redirecting back to the article page we edited
        return redirect('/blog/' . $article->link);
    }

    /**
     * This function is made to delete the resource
     */
    public function destroy($link)
    {
        $article = Article::where('link', $link);
        $article->delete();
        return redirect('/blog');
    }
}
