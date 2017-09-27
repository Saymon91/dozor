@extends('base')

@section('center-content')

    @include('common.form', [
    'csrf' => true,
    'action' => 'http://localhost:8000/register',
    'rows' => [
        ['type' => 'email', 'name' => 'email', 'label' => __('registration.E-mail') ],
        ['name' => 'phone', 'label' => __('registration.Phone') ],
        ['name' => 'username', 'label' => __('registration.Username') ],
        ['name' => 'name', 'label' => __('registration.Name') ],
        ['type' => 'password', 'name' => 'password', 'label' => __('registration.Password') ],
        ['type' => 'password', 'name' => 'password_confirmation', 'label' => __('registration.Confirm password') ],
    ],
    'buttons' => [
        ['type' => 'submit', 'label' => __('registration.Submit')]
    ]])
@endsection