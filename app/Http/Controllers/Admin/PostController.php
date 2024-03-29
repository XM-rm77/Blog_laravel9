<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Admin\AdminController;

class PostController extends Controller
{
    public function index()
    {
        $posts = $this->getPosts();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = DB::table('categories')->where('status', true)->get();
        return view('posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|required|max:50000',
            'status' => 'required'
        ]);
        try {
            if ($request->hasFile('image')) {
                $image = $request->file('image')->store('posts', 'public');
            }
            Post::create([
                'title' => $request->title,
                'description' => $request->description,
                'category_id' => $request->category_id,
                'image' => isset($image) ? $image : 'dummy.jpg',
                'status' => $request->status,
                'user_id' => auth()->user()->id
            ]);

            return to_route('post.index')->with('message', 'post created');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function delete($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return to_route('post.index')->with('message', 'post deleted');
    }

    private function getPosts()
    {
        return DB::table('posts')
            ->where('posts.status', true)
            ->join('categories', 'categories.id', 'posts.category_id')
            ->select('posts.*', 'categories.category_name as category_name')
            ->orderByDesc('id')
            ->get();
    }
}
