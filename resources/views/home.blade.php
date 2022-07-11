<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-model-controller</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Movies</h1>
    <div class="list">
        <div class="cards">
            @foreach ($movies as $movie)
                <div class="card">
                    <a href="#">
                        <div class="content">
                            <h2>{{$movie->title}}</h2>
                            <hr>
                            <p>Original Title: <div class="text">{{$movie->original_title}}</div></p>
                            <hr>                    
                            <p>Country: <div class="text">{{$movie->nationality}}</div></p>
                            <hr> 
                            <p>Date: <div class="text">{{$movie->date}}</div></p>
                            <hr> 
                            <b>Vote: {{$movie->vote}}</b>
                        </div>
                    </a>    
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>