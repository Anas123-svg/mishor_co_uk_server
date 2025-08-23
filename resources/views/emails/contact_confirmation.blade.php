@component('mail::message')
<div style="font-family: 'Arial', sans-serif; color: #333; line-height: 1.6; padding: 10px;">
    <h2 style="color: #4A90E2;">Hello {{ $data['name'] }},</h2>

    <p style="font-size: 16px;">
        We have received your message and will be in touch with you soon.
    </p>

    <div style="background-color: #f7f7f7; padding: 15px; border-left: 4px solid #4A90E2; margin: 15px 0; border-radius: 5px;">
        <strong>Your Message:</strong><br>
        <p style="margin: 5px 0;">{{ $data['message'] }}</p>
    </div>

    <p style="font-size: 16px;">Thanks,<br><strong>{{ config('app.name') }}</strong></p>
</div>
@endcomponent
