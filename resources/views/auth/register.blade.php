@extends('base')

@section('center-content')
<form action="{{ route('register') }}" method="post">
    {{ csrf_field() }}
    <label for="email">{{ __('registration.E-mail') }}</label><input type="email" name="email" id="email">
    <label for="phone">{{ __('registration.Phone') }}:</label><input type="text" name="phone" id="phone">
    <label for="username">{{ __('registration.Username') }}:</label><input type="text" name="username" id="username">
    <label for="password">{{ __('registration.Password') }}:</label><input type="password" name="password" id="password">
    <label for="password_confirm">{{ __('registration.Confirm password') }}:</label><input type="password" name="password_confirm" id="password_confirm">
    <input type="submit" value="Зарегистрироваться">
</form>
@endsection