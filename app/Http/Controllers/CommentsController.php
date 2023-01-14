<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Notification;
use App\Models\Post;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
        return view('comment.index', [
            'comments' => $comments,
        ]);
    }


    public function store(Request $request)
    {
        $post = Post::find($request['post_id']);
        $comments = $post->comments;
        $request->validate([
            'body' => 'required',
        ]);
        $input = $request->all();
        $input['user_id'] = auth()->user()->id;
        Comment::create($input);
        if ($post->user_id !== auth()->user()->id) {
            $this->tiggerNotification($post->user_id,  auth()->user()->name . " made a comment on your post.");
        }
        return view('users.posts.show', [
            'post' => $post,
            'comments' => $comments
        ]);
    }

    public function tiggerNotification($to_user_id, $message)
    {
        Notification::create(['sent_to_user_id' => $to_user_id, 'message' => $message]);
    }
}
