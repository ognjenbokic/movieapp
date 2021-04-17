<div class="column">
    <a href="{{ route('movies.show', $movie['id'])}}">
        <img src="{{'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}"  alt="poster">
    </a>
    <div class="movie-info">
        <a href="{{ route('movies.show', $movie['id'])}}">
            {{$movie['title']}}
        </a><br>
        <small>
            <span> <img src="{{asset('/img/star.svg.png')}}"  class="star mb-2" alt="image"></span>
            <span>{{$movie['vote_average']  *10 .'%'}}</span>
            <span>|</span>
            <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d. Y')}}</span>
            <div class="text-muted">
                @foreach($movie['genre_ids'] as $genre)
                    {{ $genres->get($genre)}}@if (!$loop->last), @endif
                @endforeach
            </div>
        </small>
    </div> 
</div>