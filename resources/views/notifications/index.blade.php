@extends('layouts.master')
@section('content')
<div class="" style="text-align: center">
  @foreach($notifications as $key => $value)
  <div class="box box-primary" style="width: 25em;padding: 1em;text-align:center; margin: 0 auto; margin-top: 10px">

    <a href="#">
      <div class="cursor-pointer p-2 min-h-auto m-3 mb-2 w-40 block p-6  border border-gray-200 rounded-lg shadow-lg hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 bg-blue-300">
        <div class="card-body mb-3 font-bold">
          <i class="fa fa-bell-o" style="margin-right: 10px"></i>{{ ucfirst($value->message) }}
        </div>
      </div>
    </a>
  </div>

  @endforeach

</div>

</div>
</div>
@endsection