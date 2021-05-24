<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>
    
    @include('components.header')


    <div>

        <h1>
            Movie
        </h1>
        <h2>
            [{{ $movie -> id }}]
            {{ $movie -> title }}
        </h2>
        <h2>
            {{ $movie -> original_title }} 
        </h2>
        <p>
            {{$movie -> nationality}}
        </p>
        <p>
            {{$movie -> date}}
        </p>
        <p>
            {{$movie -> vote}}
        </p>


        <a href="{{route('home')}}">
            Torna alla pagina precedente
        </a>
    </div>

  

    @include('components.footer')
</body>
</html>