@component('mail::message')
    # Register Camp: {{ $checkout->Camp->title }}

    Hi, {{ $checkout->User->name }}!

    Thank you for register on <b>{{ $checkout->Camp->title }}</b>,  please payment instruction by click the button below.

@component('mail::button', ['url' => route('user.checkout.invoice', $checkout->id)])
Get Invoice!!!
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
