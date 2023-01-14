@extends('layouts.app')

@section('content')

<a href="/posts" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Go back</a>
<div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4 card p-3">
    <h1 class="text-2xl font-bold text-gray-800">Make changes to the Post</h1>
    <p class="text-gray-600">Update your values to the post</p>
    <form action="" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="control-group col-12 mt-5">
                <label class="font-bold" for="title">Post Title</label>
                <input type="text" id="title" class="form-control rounded-lg" name="title" placeholder="Enter Post Title" value="{{ $post->title }}" required>
            </div>
            <div class="control-group col-12 mt-2 mt-5">
                <label class="font-bold" for="body">Post Body</label>
                <textarea id="body" class="form-control rounded-lg" name="body" placeholder="Enter Post Body" rows="5" required>{{ $post->body }}</textarea>
            </div>
        </div>
        <div class="row mt-10">
            <div class="control-group col-12 text-center">
                <button id="btn-submit" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                    Update Post
                </button>
            </div>
        </div>
    </form>
</div>


@endsection