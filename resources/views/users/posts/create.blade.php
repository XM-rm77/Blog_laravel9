@extends('layouts.app')

@section('content')

<div class="bg-gray-200 h-screen">
    <div class="flex flex-row justify-center">
        <div class="w-3/4 pt-2">
            <div class="row justify-center">
                <div class="p-5 rounded mt-5 pl-4 pr-4 pt-4 pb-4 block p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <a href="/posts" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Go back</a>
                    <h1 class="text-xl font-bold text-gray-800 text-2xl m-3">Create a New Post</h1>
                    <p class="m-3">Please write your post title and body</p>
                    <form action="{{route('posts.store')}}" method="POST" class="m-3">
                        @csrf
                        <div class="row">
                            <div class="control-group rounded-lg col-12">
                                <label class="font-bold text-gray-800" for="title">Post Title</label>
                                <input type="text" id="title" class="form-control rounded-lg" name="title" placeholder="Enter Post Title" required>
                            </div>
                            <div class="control-group rounded-lg col-12 mt-3">
                                <label class="font-bold text-gray-800" for="body">Post Body</label>
                                <textarea id="body" class="form-control rounded-lg" name="body" placeholder="Enter Post Body" rows="" required></textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group rounded-lg col-12 text-center mt-5">
                                <button id="btn-submit" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                                    Create Post
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection