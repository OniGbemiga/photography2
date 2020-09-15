@component('mail::message')
# Welcome to Our Newsletter

Thank you for subscribing to this wonderful channel. We will be sure to wet your appetite form time to time

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
