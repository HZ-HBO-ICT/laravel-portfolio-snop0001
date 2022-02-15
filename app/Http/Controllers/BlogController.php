<?php
namespace App\http\Controllers;

use App\Models\Article;

class BlogController
{
    public function show()
    {
        return view('blog', ['articles'=>Article::all()]);
    }

    /**
     * This function is made to show the view page of each post
     */
    public function showPost($link)
    {
        $article = Article::where('link', $link);
        return view('articles.show', [
            'article' => $article->firstOrFail()
        ]);
    }
}
