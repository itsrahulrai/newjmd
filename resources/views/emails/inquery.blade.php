@component('mail::message')
# {{ $subject }}

{{ $messageBody }}

@component('mail::button', ['url' => $url])
Reply
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
