<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Login\LoginInterface;

class LoginController extends Controller
{
    private $model;

    public function __construct(LoginInterface $model)
    {
        $this->model = $model;
    }

    public function index () 
    {
        $hello = $this->model->get();
        $hello_array = ['Hello', 'こんにちは', 'ニーハオ'];

        return view('index', compact('hello', 'hello_array'));
    }
}
