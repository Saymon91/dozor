<!DOCTYPE html>
<html lang="ru">
<head>
    <title>DOZOR</title>

    <meta charset="UTF-8">
    <meta name="Author" content="Simon Zhuravlev">
    <meta name="Robots" content="ALL">
    <meta name="Description" content="Dozor game engine">
    <meta name="Keywords" content="Dozor,dozor game,дозор,игры,досуг,развлечения,games,entertainment,квест,квесты,quest,quests">
    @stack('meta')

    @stack('scripts')

    <link rel="stylesheet" type="text/css" href="./css/web.css">
    @stack('styles')

</head>
<body>
    <header style="grid-area: header; background: #cccccc;">@section('header')@include('web.header')@show</header>
    <nav style="grid-area: nav-bar; background: #8c8c8c;">@section('nav-bar')@show</nav>
    <div style="grid-area: left-bar; background: #8c8c8c;">@section('left-bar')@show</div>
    <main style="grid-area: center-content; background: #a4aaae;">@section('center-content')@show</main>
    <aside style="grid-area: right-bar; background: #8c8c8c;">@section('right-bar')@show</aside>
    <footer style="grid-area: footer; background: #757575;">@section('footer')@show</footer>
</body>
</html>