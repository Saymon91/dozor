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

    <style>
        :root { --background-image: url("../images/background_{{ random_int(1, 6) }}.jpg"); }
    </style>
    <link rel="stylesheet" type="text/css" href="css/web.css">
    @stack('styles')

</head>
<body>
    <header style="grid-area: header; ">@section('header')@include('web.header')@show</header>
    <nav style="grid-area: nav-bar;">@section('nav-bar')@show</nav>
    <div style="grid-area: left-bar;">@section('left-bar')@show</div>
    <main style="grid-area: center-content;">@section('center-content')@show</main>
    <aside style="grid-area: right-bar;">@section('right-bar')@show</aside>
    <footer style="grid-area: footer;">@section('footer')@show</footer>
</body>
</html>