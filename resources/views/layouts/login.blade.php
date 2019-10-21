<!DOCTYPE html>
<html lang="pt-br" class="bg-light p-0">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>CuidaPet</title>
{{--    @if(isset($keywords_for_layout))--}}
{{--        <meta name="keywords" content="{{$keywords_for_layout}}" >--}}
{{--    @endif--}}
{{--    @if(isset($description_for_layout))--}}
{{--        <meta name="description" content="{{$description_for_layout}}" >--}}
{{--    @endif--}}

<!-- css -->
    <link rel="stylesheet" href="/css/app.css">

    @yield('css')

</head>

<body>
<header class="bg-gradient-primary">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-12 col-md-10 offset-md-1 frase">
                <div class="row">
                    <div class="col-12 col-md-7 d-flex p-4">

                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
        </div>
    </div>
</header>
<section>
    <div class="container-fluid bg-light pt-0">
        <div class="row ">
            @yield('content')
        </div>

    </div>
</section>

<footer class="  login-f">
    <div class="container-fluid">
        <div class="row footer-login">

        </div>
    </div>
</footer>

{{--<script src="/js/jquery-3.3.1.min.js"></script>--}}
{{--<script src="/js/jquery.mask.min.js"></script>--}}
{{--<script src="/js/app.js"></script>--}}
{{--<script src="/js/cadastrar.js"></script>--}}
{{--<script src="/js/config.js"></script>--}}

<script src="{{ asset('js/jquery-3.3.1.min.js') }}" defer></script>
<script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
<script src="{{ asset('js/jquery.mask.min.js') }}" defer></script>
<script src="{{ asset('js/all.min.js') }}" defer></script>
<script src="{{ asset('js/config.js') }}" defer></script>
<script src="{{ asset('js/cadastrar.js') }}" defer></script>

@yield('scripts')

</body>
</html>