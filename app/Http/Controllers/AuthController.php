<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = auth()->user();
            if ($user->role == 'admin') {
                return redirect()->intended('/admin/dashboard')
                    ->withSuccess('Successfully Signed in into the blogger !!!');
            } else {
                return redirect()->intended('posts')
                    ->withSuccess('Successfully Signed in into the blogger !!!');
            }
        }

        return redirect("login")->withSuccess('Invalid Credentials');
    }

    public function postRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4',
            'role' => 'required'
        ]);

        $data = $request->all();
        $this->create($data);
        return redirect("/login")->withSuccess('User Registration Successful');
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return view('auth.dashboard');
        }

        return redirect("login")->withSuccess('403 Unauthorized to this action');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role' => $data['role'],
            'password' => Hash::make($data['password'])
        ]);
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
