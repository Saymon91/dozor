@push('styles')
    <link rel="stylesheet" type="text/css" href="./css/web-header.css">
@endpush

<h1 class="page-title">DOZOR-GAME</h1>
<div class="user-bar">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('account') }}"{{ User::username }}></a>
            @else
                <form action="{{ route('login') }}" method="post">
                    <submit>Login</submit>
                    <a href="{{ route('register') }}">Register</a>
                </form>
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
                @endauth
        </div>
    @endif
</div>