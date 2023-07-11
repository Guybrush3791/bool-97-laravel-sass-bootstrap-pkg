@extends('layouts.main-layout')

@section('pageName')

    posts

@endsection

@section('content')

    <div class="d-flex justify-content-between">
        <h1>Post manager</h1>
        <h1 class="px-2 py-1 bg-danger rounded text-dark">
            {{ count($posts) }}
        </h1>
    </div>

    <div class="row gap-3 text-center justify-content-center">
        @foreach ($posts as $post)
            <div class="col-3 card bg-secondary text-white" >
                <h3 class="mx-2">{{ $post['title'] }}</h3>
                <p>
                    {{ $post['body'] }}
                </p>
                <img src="{{ Vite::asset('resources/img/' . $post['img']) }}" >
            </div>
        @endforeach
    </div>

@endsection
