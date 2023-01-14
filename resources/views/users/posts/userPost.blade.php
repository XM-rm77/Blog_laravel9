@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12 pt-2">
      <div class="row">
        <div class="col-12 d-flex items-center justify-center">
          <img class="mr-5" width="50" height="50" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/1365px-Facebook_f_logo_%282019%29.svg.png" />
          <h1 class='pt-3 tracking-widest mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white text-blue-800'>SwanseaBook</h1>
        </div>

      </div>
      <a href="/posts" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Go back</a>

      <div class="flex flex-wrap">
        @foreach($posts as $key => $value)
        <a href="./posts/{{ $value->id }}">
          <div class="cursor-pointer p-2 min-h-auto m-3 mb-2 w-40 block p-6  border border-gray-200 rounded-lg shadow-lg hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 bg-blue-300">
            <div class="card-body mb-3 font-bold">
              {{ ucfirst($value->title) }}
            </div>
            <hr>
            <div class="card-footer mt-3 ">
              Posted on: <p class="text-md text-gray-800 font-bold"> {{ strftime("%d %b %Y",strtotime($value->created_at)) }}</p>
            </div>
          </div>
        </a>
        @endforeach
      </div>

      <div class="col-12 text-center mt-10">
        <a href="/posts/create" class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Add Post</a>
      </div>
      <div class="col-12 text-center mt-10">
        <a href="/show-analytics" class="text-gray-900 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Analytics</a>
      </div>
      <div class="col-12 pt-2 justify-content-center items-center d-flex mt-10">
        {!! $posts->links() !!}
      </div>

    </div>

  </div>
</div>
@endsection