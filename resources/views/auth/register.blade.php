@extends('base')

@push('styles')
    <link rel="stylesheet" type="text/css" href="./css/form.css">
@endpush

@section('center-content')
<form action="{{ route('register') }}" method="post">
    {{ csrf_field() }}
    <div class="row"><input type="email" name="email" id="email" placeholder=" "><label for="email">{{ __('registration.E-mail') }}</label></div>
    <div class="row"><input type="text" name="phone" id="phone" placeholder=" "><label for="phone">{{ __('registration.Phone') }}:</label></div>
    <div class="row"><input type="text" name="username" id="username" placeholder=" "><label for="username">{{ __('registration.Username') }}:</label></div>
    <div class="row"><input type="password" name="password" id="password" placeholder=" "><label for="password">{{ __('registration.Password') }}:</label></div>
    <div class="row"><input type="password" name="password_confirm" id="password_confirm" placeholder=" "><label for="password_confirm">{{ __('registration.Confirm password') }}:</label></div>
    <div class="row"><input type="submit" value="Зарегистрироваться"></div>
</form>
@endsection