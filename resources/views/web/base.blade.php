<!DOCTYPE html>
<html lang="ru">
<head>
    <title>DOZOR</title>
    @stack('scripts')

    <link rel="stylesheet" type="text/css" href="./css/web.css">
    @stack('styles')
</head>
<body>
    <header style="grid-area: header; background: #cccccc;">
        @section('header')
            <h1>DOZOR-GAME</h1>

        @show
    </header>
    <nav style="grid-area: nav-bar; background: #8c8c8c;">@section('nav-bar')@show</nav>
    <div style="grid-area: left-bar; background: #8c8c8c;">@section('left-bar')@show</div>
    <div style="grid-area: center-content; background: #a4aaae;">@section('center-content')@show</div>
    <div style="grid-area: right-bar; background: #8c8c8c;">@section('right-bar')@show</div>
    <div style="grid-area: footer; background: #757575;">@section('footer')@show</div>
</body>
</html>