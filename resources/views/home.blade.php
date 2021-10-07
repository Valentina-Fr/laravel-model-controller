<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Model Controller</title>
</head>
<body>
    <main>
        @foreach ($movies as $movie)
        <section class="card">
            <h2>{{$movie->title}}</h2>
            <h3>{{$movie->original_title}}</h3>
            <h4>{{$movie->nationality}}</h4>
            <h4>{{$movie->date}}</h4>
            <h4>{{$movie->vote}}</h4>
        </section>
        @endforeach
    </main>
</body>
</html>