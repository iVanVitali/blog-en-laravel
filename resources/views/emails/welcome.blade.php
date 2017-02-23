@component('mail::message')
# Bienvenido {{ $user->name }} a {{ config('app.name') }}!

Muchas gracias por registrarse en nuestro sitio web.

@component('mail::button', ['url' => ''])
Visitar nuestro sitio
@endcomponent

Saludos!<br>
{{ config('app.name') }}
@endcomponent