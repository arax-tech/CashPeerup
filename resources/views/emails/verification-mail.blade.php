@component('mail::message')
# Registration Successfully



@component('mail::button', ['url' => 'https://cashpeerup.net/verify?code='.$details['VerificationCode'] ])
Verify Now
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
