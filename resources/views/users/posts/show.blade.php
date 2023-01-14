@extends('layouts.master')


@section('header', 'View Posts')

@section('breadcrumb', 'Post')


@section('content')
<div class="container">
    <div class="row mt-10 my-10 w-3/4">
        <div class="col-12 pt-2 card py-5 shadow-lg my-20 rounded-lg p-5 w-3/4">
            <div class="py-10">
                <a href="/posts" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Back</a>
                <h1 class="font-bold text-2xl mt-5 text-center">{{ ucfirst($post->title) }}</h1>
                <p class="text-gray-700 mt-2">{!! $post->description !!}</p>
                <h4 class="font-bold text-xl my-3">Discussion Forum:</h4>

                @foreach($comments as $comment)
                <div class="display-comment">
                    <a href="/posts/user/{{$comment->user->id}}" target="_blank"><strong>{{ $comment->user->name }}</strong></a>
                    <p>{{ $comment->body }}</p>
                </div>
                @endforeach

                <form method="post" class="mt-10 " action="{{ route('comments.store')}}">
                    @csrf
                    <div class="form-group">
                        <textarea class="form-control" name="body" placeholder="Please comment your thoughts for the above post"></textarea>
                        <input type="hidden" name="post_id" value="{{ $post->id }}" />
                    </div>
                    <div class="form-group mt-5 text-right box-footer">
                        <input type="submit" class="btn btn-primary" value="Add Comment" />
                    </div>
                </form>

                @if($post->user_id == Auth::user()->id)
                <div class="row justify-center text-center mt-10">
                    <div class="box-footer">
                        <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary"> <i class="fa fa-pencil" aria-hidden="true"></i>
                            Edit Post</a>
                    </div>
                    <div class="box-footer">
                        <form id="delete-frm" class="" action="" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-trash" aria-hidden="true"></i>Delete Post</button>
                        </form>
                    </div>
                </div>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection