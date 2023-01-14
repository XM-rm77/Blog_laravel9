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
        <img class="box-img" src="{{$value->image}}" alt="Image">
        <div class="box-body">
            <h5 class="card-title">{{ $value->title }}</h5>
            <p class="card-text">{{ $value->description }}</p>
            <a href="{{ route('posts.show', $value->id)}}" class="btn btn-primary">View</a>
        </div>
    </div>
    @endforeach
</div>



@endsection