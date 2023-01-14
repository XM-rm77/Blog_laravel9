<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Analytic;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PostsController extends Controller
{
    // listing all the posts with pagination enabled
    public function index()
    {
        $posts = Post::paginate(10);
        return view(
            'users.posts.index',
            compact('posts')
        );
    }

    // This is the create view method for the posts
    public function create()
    {
        return view('users.posts.create');
    }

    // taking the request parameter and storing the post
    public function store(Request $request)
    {
        $post = Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => auth()->user()->id
        ]);
        return redirect('posts/' . $post->id);
    }

    // show view for particular post
    public function show(Post $post)
    {
        // for every view we are increment the count view
        // $analytic = Analytic::firstOrNew(['post_id' =>  $post->id]);
        // $analytic->view_count += 1;
        // $analytic->save();
        $comments = $post->comments;
        return view('users.posts.show', [
            'post' => $post,
            'comments' => $comments
        ]);
    }

    // Edit View for a post
    public function edit(Post $post)
    {
        return view('users.posts.edit', [
            'post' => $post,
        ]);
    }

    // Update function for a post
    public function update(Request $request, Post $post)
    {
        $post->update([
            'title' => $request->title,
            'body' => $request->body
        ]);

        return redirect('posts/' . $post->id);
    }

    // to delete a post this method will be called
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/posts');
    }
}
