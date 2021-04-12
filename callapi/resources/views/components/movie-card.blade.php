<div class="movie">
    <a href="{{ route('movies.show', $movie['id'])}}">
        <img src="{{'https://image.tmdb.org/t/p/w300/'.$movie['poster_path']}}"  alt="poster">
    </a>  
    <div class="movie-info">
        <a href="{{ route('movies.show', $movie['id'])}}">{{$movie['title']}}</a>
        <br>
        <span class="star"> <img src="{{asset('/img/star.svg.png')}}" alt="image"></span>
        <span>{{$movie['vote_average']  *10 .'%'}}</span>
        <span>|</span>
        <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d,Y')}}</span>
    </div>
        <div class="genre">
            @foreach($movie['genre_ids'] as $genre)
                {{ $genres->get($genre)}}@if (!$loop->last), @endif
            @endforeach
    </div>
</div>