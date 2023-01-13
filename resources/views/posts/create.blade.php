@extends('layouts.master')

@section('header', 'Create Post')

@section('breadcrumb', 'Create')

@section('content')

<div class="col-md-12">
    @include('flash_message')
    <div class="box box-primary">
        <div class="box-header with-border">
            <a href="{{route('post.index')}}" class="btn btn-primary pull-right">Back</a>
        </div>
        <form action="{{route('post.store')}}" role="form" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label for="post">Category</label>
                    <select name="category_id" class="form-control">
                        <option value="" selected>Select Category</option>
                        @forelse($categories as $category)
                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                        @empty

                        @endforelse
                    </select>
                </div>
                <div class="form-group">
                    <label for="post">Title</label>
                    <input type="text" class="form-control" name="title" id="post" placeholder="enter title">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="40" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" id="image" name="image">
                </div>
                <div class="form-group">
                    <label for="status">status</label>
                    <select name="status" class="form-control">
                        <option value="1" selected>Active</option>
                        <option value="0">Block</option>
                    </select>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>

@endsection