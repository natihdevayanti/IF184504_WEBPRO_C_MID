<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Project</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url("https://www.muralswallpaper.co.uk/app/uploads/green-hexagon-geometric-pattern-wallpaper-mural-Room-825x535.jpg");
                
                background-size: cover;
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
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
            
            .title {
                font-size: 84px;
            }
            .part-1 {
            width: 100%;
            height: 100vh; 
        background: linear-gradient(
    rgba(55, 102, 102, 0.589),
    rgba(0, 0, 0, 0.5)
    ),
    url(background.jpg) center no-repeat;
  background-size: cover;
  flex-direction: column;
}
            .links > a {
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
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
                <div class="content">
                    <div style="color: rgb(63, 98, 100)" class="title m-b-md">
                        Welcome!
                    </div>
                    <h3 style="color: rgba(63, 98, 100, 0.623)"> We are here to solve your problem. </h3>
                </div>
        </div>
    </body>
</html>
