@extends('layouts.mainLayout')
@section('content')

<div class="container-fluid m-0 "> 
    <div class="movies-header">Popular movies</div>
    <div class="row">
        @foreach($popularMovies as $movie)
        @if($loop->index < 12)
            <x-movie-card :movie="$movie" :genres="$genres" />
        @endif        
        @endforeach
    </div> 
</div><!--end of popular movies-->

<div class="container-fluid m-0"> 
    <div class="movies-header">Now playing</div>
    <div class="row">
        @foreach($nowPlayingMovies as $movie)
        @if($loop->index < 12)
            <x-movie-card :movie="$movie" :genres="$genres" />
        @endif        
        @endforeach
    </div> 
</div><!--end of now playing movies-->

@endsection