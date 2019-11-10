<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>Kingyo</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/all.min.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
        <!-- Styles -->
    </head>
    <body class="bg-pet">

        <div class="flex-center position-ref full-height d-flex">
            <div class="top-left ">
                <img src="/images/kingyo.png" class="img-fluid w-25">
            </div>

            @if (Route::has('login'))
                <div class="top-right nav-item links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Cadastre-se</a>
                        @endif
                        @if (Route::has('registerProfissional'))
                            <a href="{{ route('registerProfissional') }}">Seja um Profissional</a>
                        @endif

                    @endauth
                </div>
            @endif

            <div class="content">


            </div>
        </div>


    </body>
</html>
