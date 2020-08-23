@extends('layout.common')
 
@section('title', 'HOME')
@section('pageCss')
{{-- <link href="/css/star/index.css" rel="stylesheet"> --}}
@endsection

@include('layout.header')
 
@section('content')
    <div>
        name: {{ $user->name }}
    </div>
    <div>
        email: {{ $user->email }}
    </div>
@endsection
 
@include('layout.footer')