@extends('layouts.mainLayout')
@section('content')
<!--Movie card-->
<div class="container-fluid m-0 pt-4">
    <div class="card  movie-card  bg-dark text-white mt-2">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}" class="card-img" alt="poster"  >
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{$movie['title']}}</h5>
                    <div class="card-text text-muted">
                        <small>
                            <span> <img src="{{asset('/img/star.svg.png')}}" class="star" alt="star"></span>
                            <span>{{$movie['vote_average']  *10 .'%'}}</span>
                            <span>|</span>
                            <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d,Y')}}</span>
                            <span>|</span>
                            <span>
                                @foreach($movie['genres'] as $genre)
                                    {{ $genre['name']}}@if (!$loop->last), @endif
                                @endforeach
                            </span>
                        </small>
                    </div>
                    <div class="mt-4">{{$movie['overview']}}</div>
                    <div class="mt-4">
                            @foreach($movie['credits']['crew'] as $crew)
                                @if($loop->index < 2)
                                        <div class="text-muted">{{$crew['job']}}</div>
                                        <div>{{$crew['name']}}</div>
                                @endif
                            @endforeach
                    </div>
                    <a href="https://youtube.com/watch?v={{ $movie['videos']['results'][0]['key'] }}" class="btn">Watch trailer</a>
                </div>
            </div>
        </div>
    </div>   
</div>
<!--end of movie card-->

<!--Actors-->
<div class="container-fluid m-0 ">
    <div class=" movies-header">actors</div>
    <div class="actors-row">
    @foreach($movie['credits']['cast'] as $cast)
        @if($loop->index < 6)
        <div class="actors-column">
            <img src="{{'https://image.tmdb.org/t/p/w500/'.$cast['profile_path']}}"  alt="profile">
            <div class="actors-info">
                {{$cast['name']}}
                <p class="text-muted"> {{$cast['character']}}</p>
            </div>
        </div>
        @endif
        @endforeach
    </div>
</div>
<!--end of Actors-->

<!--gallery-->
<div class="container-fluid m-0">
    <div class=" movies-header">photos</div>
    <div class="row">
    @foreach($movie['images']['backdrops'] as $image)
    @if($loop->index < 8)
        <div class="column">
            <img src="{{'https://image.tmdb.org/t/p/w500/'.$image['file_path']}}" class="gallery" alt="...">
        </div>
        @endif
        @endforeach
    </div>
</div>
<!--end of gallery -->

@endsection