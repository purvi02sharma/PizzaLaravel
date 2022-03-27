@component('mail::message')
# Welcome to Pizza World

Hi {{$details['name']}}<br>
We received your message of your booking for {{$details['date']}}  for {{$details['seat']}} people. We are glad to have you on board and we look forward to your arrival.<br><br>

Your requirements "{{$details['msg']}}".



Thanks,<br>
Purvi Sharma
@endcomponent
