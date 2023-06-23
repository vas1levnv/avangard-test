<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Repositories\PostRepository;
use App\Models\Post;

class PostController extends Controller
{
    public function __construct(public PostRepository $repository)
    {
    }
    public function index()
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }
    public function create()
    {
        return view('post.create');
    }
    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'comment' => 'string',
        ]);

        $this->repository->create($data);

        return redirect()->route('post.index');
    }
    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }
    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }
    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'comment' => 'string',
        ]);
        $post->update($data);
        return redirect()->route('post.show', $post->id);
    }

    public function destroy(Post $post){

        $post->delete();
        return redirect()->route('post.index');

    }

}
