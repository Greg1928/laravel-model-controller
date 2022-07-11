<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-model-controller</title>
</head>
<body>
    <h1>Movies</h1>
    <ul>
        @foreach ($movies as $movie)
            <li>
                <h3>Title: {{$movie->title}}</h3>
                <p>Original Title: {{$movie->original_title}}</p>
                <p>Country: {{$movie->nationality}}</p>
                <p>Date: {{$movie->date}}</p>
                <b>Vote: {{$movie->vote}}</b>
            </li>
            <hr>
        @endforeach
    </ul>
</body>
</html>