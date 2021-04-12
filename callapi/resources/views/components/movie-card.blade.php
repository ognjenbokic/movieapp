<div class="movie">
    <a href="#">
        <img src="{{'https://image.tmdb.org/t/p/w200/'.$movie['poster_path']}}"  alt="image">
    </a>  
    <div class="info">
        <span>{{$movie['title']}}</span> <br>
        <span class="star"> <img src="{{asset('/img/star.svg.png')}}" alt="image"></span>
        <span>{{$movie['vote_average']  *10 .'%'}}</span>
        <span>|</span>
        <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d,Y')}}</span>
    </div>
        <div class="info ganre">
            @foreach($movie['genre_ids'] as $genre)
                {{ $genres->get($genre)}}@if (!$loop->last), @endif
            @endforeach
    </div>
</div>