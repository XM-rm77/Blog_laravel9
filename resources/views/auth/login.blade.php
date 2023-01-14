@extends('layouts.app')

@section('content')


<!-- Section: Design Block -->
<section class="mb-40">
    <nav class="navbar navbar-expand-lg shadow-md py-2 relative flex items-center w-full justify-between" style="background: #367fa9;">
        <div class="px-6 w-full flex flex-wrap items-center justify-between">
            <div class="navbar-collapse collapse grow items-center" id="navbarSupportedContentY">
                <ul class="navbar-nav mr-auto lg:flex lg:flex-row">
                    <li class="nav-item">
                        <a class="nav-link block pr-2 lg:px-2 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out" href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link block pr-2 lg:px-2 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out" href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">Team</a>
                    </li>
                    <li class="nav-item mb-2 lg:mb-0">
                        <a class="nav-link block pr-2 lg:px-2 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out" href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">Projects</a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center lg:ml-auto">
                <button type="button" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" style="margin-right: 20px">Sign-In</button>
                <a href="/registration"><button type="button" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Register</button></a>
            </div>
        </div>
    </nav>
    <div class="flex m-5 justify-center">
        <div style="background: #367fa9;" class="block p-6 border border-gray-200 rounded-lg shadow-lg hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <div class="font-bold text-white text-center text-2xl mr-10">Login</div>
            <div class="">
                <form action="{{ route('login.post') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="email_address" class="col-md-4 col-form-label text-md-right font-bold text-white">Email</label>
                        <div class="col-md-10">
                            <input type="text" id="email_address" class="rounded-lg form-control" name="email" required autofocus>
                            @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right font-bold text-white">Password</label>
                        <div class="col-md-10">
                            <input type="password" id="password" class="rounded-lg form-control" name="password" required>
                            @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-10 offset-md-4 mt-10">
                        <button type="submit" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                            Login
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</section>
<div class="wrapper text-center">
    @include('inc.footer')

</div>

@endsection