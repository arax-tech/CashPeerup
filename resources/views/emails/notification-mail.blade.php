@component('mail::message')
# New Application For Loan

@component('mail::table')
| Heading        | Info                           |
| -------------- |:------------------------------:|
| Loan Type      | {{ $details['loan_type'] }}    |
| Name           | {{ $details['name'] }}         |
| State          | {{ $details['state'] }}        |
| city           | {{ $details['city'] }}         |
| zip            | {{ $details['zip'] }}          |
| dob            | {{ $details['dob'] }}          |
| gender         | {{ $details['gender'] }}       |
| address        | {{ $details['address'] }}      |
| amount         | {{ $details['amount'] }}       |
| status         | Pending				          |
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
