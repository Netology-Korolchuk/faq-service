<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>@yield('title')</title>
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ url('/') }}/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{ url('/') }}/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>

<body>
    <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="/faq" class="brand-logo"><i class="large material-icons">thumb_up</i> FAQ Service </a>
        <ul class="right hide-on-med-and-down">
            <li><a href="{{ url('/admin') }}">Администрирование</a></li>
            <li><a href="{{ url('/help.php') }}">Справка</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
            <li><a href="{{ url('/admin') }}">Администрирование</a></li>
            <li><a href="{{ url('/help.php') }}">Справка</a></li>
        </ul>

        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        <br/>
        @yield('navbar')
    </nav>

    {{-- ERRORS --}}
    @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <center>
             	<div class="#f44336 red">
                {{ $error }}
                </div>
                </center>
            @endforeach
        </ul>
    @endif

    {{-- FLASH MESSAGES --}}
    <div>
    @if (session()->has('flash_notification.message'))
        <center>
    	<div class="#f44336 red">
        {{ session('flash_notification.message') }}
        </div>
        </center>
    @endif
    </div>

    <div class="section">
    @yield('content')
    </div>

    <footer class="page-footer orange">
    <div class="footer-copyright">
        <div class="container">
	    <center>
            <a class="orange-text text-lighten-3" href="/faq">На главную</a> |
            <a class="orange-text text-lighten-3" href="/admin">Администрирование</a> |
            <a class="orange-text text-lighten-3" href="/help.php">Справка</a>
        </center>
        </div>
    </div>
    </footer>

    <!--  Scripts-->
    <script src="{{ url('/') }}/js/jquery-2.js"></script>
    <script>if (!window.jQuery) { document.write('<script src="bin/jquery-2.1.1.min.js"><\/script>'); }</script>
    <script src="{{ url('/') }}/js/jquery.js"></script>
    <script src="{{ url('/') }}/js/prism.js"></script>
    <script src="{{ url('/') }}/js/lunr.js"></script>
    <script src="{{ url('/') }}/js/search.js"></script>
    <script src="{{ url('/') }}/js/materialize.js"></script>
    <script src="{{ url('/') }}/js/init.js"></script>

    <script>
    $(document).ready(function() {$('select').material_select();});
	$(document).ready(function() {$('.modal').modal();});
    </script>
</body>
</html>
