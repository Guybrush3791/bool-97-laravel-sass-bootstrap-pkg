@extends('layouts.main-layout')

@section('pageName')

    about

@endsection

@section('content')
    <h1>Hello, from about page</h1>
    <a href="{{ route('home') }}">HOME</a>
@endsection
