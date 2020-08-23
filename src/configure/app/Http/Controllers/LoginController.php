<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Login\LoginInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    private $model;

    public function __construct(LoginInterface $model)
    {
        $this->model = $model;
    }

    public function index () 
    {
        // $test = $this->model->get();
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('home');
        }
        $message = 'Login Failed';
        return view('login', compact('message'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->intended('login');
    }
}
