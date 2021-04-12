@extends('layouts.mainLayout')

@section('content')

    <div class="container-show">
        <div class="show-movie">
            <img src="{{'https://image.tmdb.org/t/p/w300/'.$movie['poster_path']}}"  alt="poster">
            <div class="show-info">
                <h2 class="show-title">{{$movie['title']}}</h2>
                <span class="star"> <img src="{{asset('/img/star.svg.png')}}" alt="image"></span>
                <span>{{$movie['vote_average']  *10 .'%'}}</span>
                <span>|</span>
                <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d,Y')}}</span>
                <span>|</span>
                <span>
                    @foreach($movie['genres'] as $genre)
                        {{ $genre['name']}}@if (!$loop->last), @endif
                    @endforeach
                </span>
                <br><br>
                <p>{{$movie['overview']}}</p>
                <br><br>
                <h5 style="font-weight:bold">Featured crew</h5>
                <div class="crew">
                    @foreach($movie['credits']['crew'] as $crew)
                        @if($loop->index < 2)
                            <div>
                                <div style="padding-right:15px">{{$crew['name']}}</div>
                                <div style="color:gray; padding-right:5px">{{$crew['job']}}</div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <br><br>
                <div class="trailer">
                    <a href="https://youtube.com/watch?v={{ $movie['videos']['results'][0]['key'] }}">Watch trailer</a>
                </div>
            </div>
        </div>
        <hr style="background-color:gray">
        <div class="cast">
            @foreach($movie['credits']['cast'] as $cast)
                @if($loop->index < 4)
                    <div>
                    <a href=""><img src="{{'https://image.tmdb.org/t/p/w200/'.$cast['profile_path']}}"  alt="profile"></a>
                    <div><a href="">{{$cast['name']}}</a></div>
                    <div style="color:gray; max-width: fit-content;">{{$cast['character']}}</div>
                    </div>
                    
                @endif
            @endforeach
        </div>
    </div>

@endsection