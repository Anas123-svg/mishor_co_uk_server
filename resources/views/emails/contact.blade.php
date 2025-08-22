@component('mail::message')
# New Contact Message

**Name:** {{ $data['name'] }}  
**Email:** {{ $data['email'] }}  
@if(!empty($data['whatsapp']))
**WhatsApp:** {{ $data['whatsapp'] }}  
@endif
@if(!empty($data['phone']))
**Phone:** {{ $data['phone'] }}  
@endif

**Message:**
{{ $data['message'] }}

Thanks,  
{{ config('app.name') }}
@endcomponent
