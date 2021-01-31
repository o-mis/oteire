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

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request) {

        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();

        return redirect('/posts')->with('message', '投稿ができたよ');
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('post.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('post.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();

        return redirect('/posts/'.$post->id)->with('message', '編集ができたみたい');
    }

    public function destroy($id)
    {
        // $post = Post::find($id);
        // $post->delete();
        Post::where('id', $id)->delete();

        return redirect('/posts');
    }
}
