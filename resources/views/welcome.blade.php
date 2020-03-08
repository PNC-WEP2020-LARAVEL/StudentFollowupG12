<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Student Follow-Up</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <!-- Styles -->
        <style>
            body {
                background: url('https://www.emokykla.lt/upload/cache/450xn450/photos/2018/12/07/et2020_082157.png');
                background-size: cover;
                background-position: 20% 20%;
                margin: 0 auto;
                padding: 0;
                margin-top: 200px;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
            }
            .card-body{

            }
            
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <form action="">
                        <div class="card">
                            <div class="card-body text-center">
                                <h2 class="text-primary">Student Follow-Up</h2>
                            </div>
                            <div class="card-footer">
                                <div class="flex-center position-ref full-height">
                                    @if (Route::has('login'))
                                        <div class="top-right links">
                                            @auth
                                                <a href="{{ url('/home') }}">Home</a>
                                            @else
                                                <a class="btn btn-success" href="{{ route('login') }}">Login</a>
                        
                                                @if (Route::has('register'))
                                                    <a class="btn btn-primary float-right" href="{{ route('register') }}">Register</a>
                                                @endif
                                            @endauth
                                        </div>
                                    @endif
                        
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    </body>
    </html>
                        {{-- <div class="content">
                            <div class="title m-b-md">
                                Student Follow-Up
                            </div>
            
                            <div class="links">
                                <a href="https://laravel.com/docs">Docs</a>
                                <a href="https://laracasts.com">Laracasts</a>
                                <a href="https://laravel-news.com">News</a>
                                <a href="https://blog.laravel.com">Blog</a>
                                <a href="https://nova.laravel.com">Nova</a>
                                <a href="https://forge.laravel.com">Forge</a>
                                <a href="https://vapor.laravel.com">Vapor</a>
                                <a href="https://github.com/laravel/laravel">GitHub</a>
                            </div>
                        </div> --}}
