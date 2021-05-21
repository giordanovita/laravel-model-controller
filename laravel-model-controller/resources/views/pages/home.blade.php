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

        <ul>
            @foreach ($movies as $movie)
                <li>
                     <a href="{{route('movie', $movie -> id)}}"> 
                        {{$movie -> id}} -
                        {{$movie -> title}}
                     </a> 
                </li>
            @endforeach
        </ul>
    </div>

  

    @include('components.footer')
</body>
</html>