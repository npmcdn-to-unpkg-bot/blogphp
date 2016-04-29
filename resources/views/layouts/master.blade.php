<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog PHP</title>
    <link rel="stylesheet" href="../css/master.css">
    <link rel="stylesheet" href="../css/fonts/stylesheet.css">
    <script src="https://npmcdn.com/isotope-layout@3.0/dist/isotope.pkgd.js"></script>
</head>
<body>
<header>
    <nav>@include('partials.nav')</nav>
</header>
<div class="main">
    <div class="content">
        @yield('content')
    </div>


    <!-- <div class="sidebar">@yield('sidebar')</div>-->


</div>
<footer></footer>
<!-- {!! HTML::script('main.js')!!} -->
</body>
</html>