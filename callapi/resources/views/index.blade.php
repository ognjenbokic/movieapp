@extends('layouts.mainLayout')
@section('content')

<div class="movies-header"><p>Popular movies</p></div>  
<div class="movies-div">
    @foreach($popularMovies as $movie)
        <x-movie-card :movie="$movie" :genres="$genres" />
    @endforeach
</div><!--end of popular movies-->

<div class="movies-header"><p>Now playing</p></div>  
<div class="movies-div">
    @foreach($nowPlayingMovies as $movie)
        <x-movie-card :movie="$movie" :genres="$genres" />
    @endforeach
</div><!--end of popular movies-->

@endsection

