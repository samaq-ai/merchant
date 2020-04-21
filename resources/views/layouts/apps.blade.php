<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
                <!-- Fonts -->
                <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Markazi+Text&display=swap" rel="stylesheet">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Sama Business Services®') }}</title>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!--JUST ENABLED-->





        <!--JUST ENABLED-->




        <!--JUST DISABLED-->
            <!--
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                <link href="{{ asset('css/toastr.css') }}" rel="stylesheet">
                <script src="{{ asset('js/toastr.js') }}" defer></script>
                <script src="{{ asset('js/bootstrap.js') }}" defer></script>
                <script src="{{ asset('js/jquery-3.3.1.min.js') }}" defer></script>
                <script src="{{ asset('js/chosen.jquery.js') }}" defer></script>
                <script src="{{ asset('js/prism.js') }}" defer></script>
                <script src="{{ asset('js/init.js') }}" defer></script>

                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>


            -->
        <!--JUST DISABLED-->





        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->



        <!-- Styles -->
        <link href="{{ asset('sass/app.scss') }}" rel="stylesheet">
        <link href="{{ asset('css/chosen.css') }}" rel="stylesheet">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <!--<link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">-->
        <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
        <link rel="stylesheet" href="/vendor/emojione/sprites/emojione-sprite-{{ config('emojione.spriteSize') }}.min.css"/>
        <link href="{{ asset('css/jush.css') }}" rel="stylesheet">
        <script src="{{ asset('js/jush.js') }}" defer></script>
        <!--<link href="{{ asset('css/bootstrap-theme.css') }}" rel="stylesheet">-->


        <!--<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>-->

        <script src="https://kit.fontawesome.com/97dc574155.js" crossorigin="anonymous"></script>

        <link rel="manifest" href="{{ asset('js/manifest.json') }}">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-web-app-capable" content="yes">

        <link rel="apple-touch-icon" href="{{ asset('images/icon.png') }}" />
        <link rel="apple-touch-startup-image" href="{{ asset('images/launch-screen.png') }}">
        <meta name="apple-mobile-web-app-title" content="Σάμα">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <link rel="icon" href="{{ asset('images/icon.png') }}">

        <!-- Add to Homescreen -->
        <link rel="stylesheet" type="text/css" href="{{ asset('sass/addtohomescreen.css') }}">
        <script src="{{ asset('js/addtohomescreen.js') }}"></script>
        <script>
            addToHomescreen.removeSession();
            instance.clearSession();
            addToHomescreen();
            addToHomescreen({
                detectHomescreen: true
            });
            var a = addToHomescreen({
                onAdd: function () {
                    alert('Welcome to Sama Business Services®');
                }
            });
        </script>
    </head>

<body>
<main class="py-4">
            @if(Session::has('toasts'))
                @foreach(Session::get('toasts') as $toast)
                    <div class="alert alert-{{ $toast['level'] }}">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ $toast['message'] }}
                    </div>
                @endforeach
            @endif
            @yield('content')
        </main>
</body>

</html>