<?php

namespace App\http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostsController extends Controller
{
    /**
     * This function is made to show the view page
     */
    public function show($slug)
    {
        return view('post', [
                'post' => Post::where('slug',$slug)->firstOrFail()
            ]);
        }
}
