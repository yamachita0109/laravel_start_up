@extends('layout.common')
 
@section('title', 'Login')
@section('pageCss')
{{-- <link href="/css/star/index.css" rel="stylesheet"> --}}
@endsection

@include('layout.header')
 
@section('content')
    <form method="POST">
        @csrf
        <div>
            <label>email</label>
            <input type="email" name="email"/>
        </div>
        <div>
            <label>password</label>
            <input type="password" name="password"/>
        </div>
        <button type="submit">Login</button>
    </form>
    <p>{{ $test }}</p>
@endsection
 
@include('layout.footer')