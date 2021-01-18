<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * ポスト一覧を表示
     *
     * @return view
     */
    public function index()
    {
        $posts = Post::all();

        return view('post.index',
        ['posts' => $posts]);
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('post.show', compact('post'));
    }
}
