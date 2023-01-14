@extends('layouts.master')

@section('header', 'Dashboard')

@section('content')
<div class="container">
    <div class="box-header">
        <a href="{{route('post.create')}}" class="btn btn-primary">
            Add Post
        </a>
    </div>
</div>
<div class="flex flex-wrap" style="display: flex; flex-wrap: wrap">
    @foreach($posts as $key => $value)
    <div class="box box-primary" style="width: 20rem; margin-right: 10px">
        <img class="box-body" src="{{asset('storage/'.$value->image)}}" style="text-align:center; margin: 0 auto;" alt="Image" weight="100px" height="100px">
        <div class="box-body">
            <a href="{{ route('posts.show', $value->id)}}">
                <h5 class="card-title"><b>{{ $value->title }}</b></h5>
            </a>
            <a href="{{ route('posts.show', $value->id)}}" class="btn btn-primary">View</a>
        </div>
    </div>
    @endforeach
</div>
<div class="col-12 pt-2 justify-content-center items-center d-flex mt-10">
    {!! $posts->links() !!}
</div>



@endsection