@component('mail::message')
# Hello {{ $data['name'] }},

We have received your message and will be in touch with you soon.

**Your Message:**  
{{ $data['message'] }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
