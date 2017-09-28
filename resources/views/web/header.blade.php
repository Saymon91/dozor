<h1 class="page-title">DOZOR-GAME</h1>
<div class="user-bar">
    @if (Route::has('login'))
        @auth
        <a href="{{ url('account') }}"{{ $user::username }}></a>
        @else
        @include('auth.login-form')
        @endauth
    @endif
</div>