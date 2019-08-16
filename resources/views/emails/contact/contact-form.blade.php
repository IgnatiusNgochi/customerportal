@component('mail::message')
 
# Kind regards and Thank you for your Message

<strong> Name </strong> {{ $data['name'] }}
<strong> Email </strong> {{ $data['email'] }}
<strong> Message </strong> 

{{ $data['message'] }}

@endcomponent
