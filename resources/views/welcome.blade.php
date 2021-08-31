<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #e6e6ff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .container {
            max-width: 500px;
        }

        dl,
        ol,
        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .imgPreview img {
            padding: 8px;
            max-width: 100px;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .container {
            display: flex;
            justify-content: center;
        }

        .center {
            width: 1200px;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Acasa</a>
            @else
            <a href="{{ route('login') }}">Conectare</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Inregistrare</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                BCT Service
            </div>
        </div>
    </div>
</body>

</html>