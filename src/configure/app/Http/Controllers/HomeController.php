<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->user = Auth::user();
    }

    public function index()
    {
        $user = Auth::user();


        return view('home', compact('user'));
    }
}