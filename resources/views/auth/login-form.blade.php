@include('common.form', [
    'action' => 'http://localhost:8000/login',
    'csrf' => true,
    'rows' => [
        ['name' => 'phone', 'label' => __('registration.Login')],
        ['name' => 'password', 'type' => 'password', 'label' => __('registration.Password')],
        ['type' => 'checkbox', 'name' => 'remember', 'label' => __('registration.Remember Me')]
    ],
    'buttons' => [
        ['type' => 'submit', 'label' => __('registration.Enter')],
        ['type' => 'button', 'label' => __('registration.Register')],
        ['type' => 'button', 'label' => __('registration.Forgot your password?')],
    ]
])