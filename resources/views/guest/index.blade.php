@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>movie list</h1>
        </div>
        <div class="row">
            @foreach ($movies as $movie)
               <div class="col-3 py-4">
                    <h2>{{ $movie->title }}</h2>
                    <h3>{{ $movie->original_title }}</h3>
                    <p>{{ $movie->date }}</p>
                    <p>{{ $movie->vote }}</p>
                </div> 
            @endforeach
        </div>
    </div>
@endsection