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
        <script src="https://kit.fontawesome.com/97dc574155.js" crossorigin="anonymous"></script>
        <link href="https://cdn.samabusiness.sa/v1/css/main.css" rel="stylesheet">
        <link href="https://cdn.samabusiness.sa/v1/sass/main.scss" rel="stylesheet">
        <script src="https://cdn.samabusiness.sa/v1/js/main.js"></script>
        <script src="https://cdn.samabusiness.sa/v1/js/cdngtag.js"></script>      
        <link rel="manifest" href="https://cdn.samabusiness.sa/v1/src/manifest.json">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-web-app-capable" content="yes">
        <link rel="apple-touch-icon" href="https://cdn.samabusiness.sa/v1/images/cdn.jpg" />
        <link rel="apple-touch-startup-image" href="https://cdn.samabusiness.sa/v1/images/launcher-img.png">
        <meta name="apple-mobile-web-app-title" content="Σάμα">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <!-- Add to Homescreen -->
        <link rel="stylesheet" type="text/css" href="https://cdn.samabusiness.sa/v1/src/addtohomescreen.css">
        <script src="https://cdn.samabusiness.sa/v1/src/addtohomescreen.js"></script>
        <script>
            addToHomescreen.removeSession();
            instance.clearSession();
            addToHomescreen();
            addToHomescreen({
                detectHomescreen: true
            });
            var a = addToHomescreen({
                onAdd: function () {
                    alert('Welcome Sama Business Services®');
                }
            });
        </script>
    <!-- Add to Homescreen -->  
</head>        
<body>
<main class="py-4">

        <div class="header">
            <h3>SAMA API</h3>
        </div>
            <nav class="navbar" id="box">
                <a href="/manifest0"><i class="fa fa-refresh"></i> Refresh</a>
            </nav>
        <div class="content">
        @if(Session::has('toasts'))
                @foreach(Session::get('toasts') as $toast)
                    <div class="alert alert-{{ $toast['level'] }}">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ $toast['message'] }}
                    </div>
                @endforeach
            @endif
            @yield('content')
        <i class="fa fa-heart"></i>
        <div id="blue">blue</div>
        </div>
        <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
        <div class="footer">
            <p>جميع الحقوق محفوظة &copy; 2020 سما الاعمال السعودية®. إنشاء وتطوير شركة سما لخدمات الاعمال</p>
        </div>
    </main>
</html>