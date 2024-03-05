@component('mail::message')
    # Welcome

    Hi, {{ $user->name }}!
    Welcome to Bootcamp, your account has been created successfully. Now you can choose your favorite courses and start learning.

@component('mail::button', ['url' => route('login')])
Login Here!
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
