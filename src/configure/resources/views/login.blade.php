@extends('layout.common')
 
@section('title', 'ログイン')
@section('pageCss')
{{-- <link href="/css/star/index.css" rel="stylesheet"> --}}
@endsection

@include('layout.header')
 
@section('content')
    <p>{{ $hello }}</p>
    @foreach ($hello_array as $hello_word)
        {{ $hello_word }}<br>
    @endforeach
@endsection
 
@include('layout.footer')