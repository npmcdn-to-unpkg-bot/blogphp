<!doctype html>
<html class="no-js" lang="fr">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <title>ADMIN @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="../../css/fonts/stylesheet.css">
    <link rel="stylesheet" href="../../css/master.css">
    @yield('head')
</head>
<body>
<header id="header" role="banner" class="line pam">
    @include('partials.nav')
</header>

<div id="main" role="main" class="line pam">
    <div class="grid-2">
        <div class="main-content">@yield('content')</div>
        <div class="sidebar">
            <!-- <div class="sidebar">@yield('sidebar')</div>-->
        </div>
    </div>
</div>
<footer id="footer" role="contentinfo" class="line pam txtcenter">
</footer>
<!-- <script src="{{url('assets/js/app.min.js')}}"></script>-->

</body>
</html>