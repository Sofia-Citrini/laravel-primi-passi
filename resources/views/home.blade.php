<!DOCTYPE html>

<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Laravel primi-passi</title>

</head>

<body>
    <h1>{{$title}}</h1>

    <ul>
        @foreach ($nav as $link)
            <li>
                <a href="{{route($link)}}">{{$link}}</a>
            </li> 
        @endforeach
    </ul>
    
</body>
</html>