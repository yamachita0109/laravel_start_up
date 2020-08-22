<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Login\LoginInterface;
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
        $test = $this->model->get();

        return view('login', compact('test'));
    }

    public function authentication(Request $request)
    {
        $email = $request->input('email');
        $name = $request->input('password');

        // TODO Validation

        return view('login', compact('test'));
    }
}
