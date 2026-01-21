<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Spatie\Sheets\Facades\Sheets;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Sheets::collection('posts')
                    ->all()
                    ->sortByDesc('date');

        return view('posts.index', [
           'posts' => $posts,
        ]);
    }

    public function show(Post $post)
    {
        // dd($post);
        return view('posts.show', [
            'post' => $post,
        ]);
    }
}
