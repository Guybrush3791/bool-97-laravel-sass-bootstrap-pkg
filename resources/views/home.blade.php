@extends('layouts.main-layout')

@section('pageName')

    home

@endsection

@section('content')

    <div id="home">
        <h1>Hello from the best Pasta-Commerce of the entire World!</h1>
        <a href="{{ route('posts') }}">POSTS</a>
        <a href="{{ route('about') }}">ABOUT</a>

        <div class="my-5">
            <h2>Available pasta</h2>
            @foreach ($db['paste'] as $pasta)
                <div class=" my-2 px-4 py-3 bg-secondary text-light">
                    <h1 class="text-center">{{ $pasta['titolo'] }}</h1>
                    <div>
                        <img class="f-right" src="{{ $pasta['src'] }}" alt="main pasta img" width="300px">
                        <p class="text-justify">
                            {!! $pasta['descrizione'] !!}
                        </p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span class="bg-dark text-light px-2 py-2">Tipologia: {{ $pasta['tipo'] }}</span>
                        <span class="bg-dark text-light px-2 py-2">Peso: {{ $pasta['peso'] }}</span>
                        <span class="bg-dark text-light px-2 py-2">Cottura: {{ $pasta['cottura'] }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



@endsection
