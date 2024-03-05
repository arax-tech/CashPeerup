@component('mail::message')
# Application Status is Updated

@if ($details['status'] == "Pending")
Pending loan request-Welcome to Cashpeerup.Verification usually takes minutes, but occasionally up to 24 hours to process. Once our system verifies your information , we update your loan request via email and your profile. 

Ps: We do not ask for upfront payment or fee for your loan to be approved.
@elseif ($details['status'] == "Approved")
Loan Approved.  Congratulations! 

You have been approved for  your requested amount  please check your cashpeerup profile. 

We have few more questions to ask you before we complete your loan process. Our representative will contact you shortly regarding your loan agreement. 

Ps: We do not ask for upfront payment or fee for your loan to be approved 
@elseif ($details['status'] == "Rejected")
Loan denied. We regret to announce to you that your loan request has been denied due to wrong information. Please provide valid documents for us to proceed. 

Ps: We do not ask for upfront payment or fee for your loan to be approved. 
Regards! 
@endif
 

Thanks,<br>
{{ config('app.name') }}
@endcomponent
