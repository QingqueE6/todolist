<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="{{asset("favicon.png")}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @vite('resources/css/app.css')
    <title>Todo List</title>

</head>

<body>
    @auth
    @include("header")
    @endauth
                            {{-- Check the following link for neat documentation about laravel error messages --}}
    @if ($errors->any())    {{-- https://laravel.com/docs/10.x/validation#quick-displaying-the-validation-errors --}}
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        {{$slot}}

    @include("footer")
    
</body>
</html>