@component('mail::message')
<div style="font-family: 'Arial', sans-serif; color: #333; line-height: 1.6; padding: 10px;">
    <h2 style="color: #E94E77;">New Contact Message</h2>

    <table style="width: 100%; border-collapse: collapse; margin: 10px 0;">
        <tr>
            <td style="font-weight: bold; padding: 5px; width: 120px;">Name:</td>
            <td style="padding: 5px;">{{ $data['name'] }}</td>
        </tr>
        <tr>
            <td style="font-weight: bold; padding: 5px;">Email:</td>
            <td style="padding: 5px;">{{ $data['email'] }}</td>
        </tr>
        @if(!empty($data['whatsapp']))
        <tr>
            <td style="font-weight: bold; padding: 5px;">WhatsApp:</td>
            <td style="padding: 5px;">{{ $data['whatsapp'] }}</td>
        </tr>
        @endif
        @if(!empty($data['phone']))
        <tr>
            <td style="font-weight: bold; padding: 5px;">Phone:</td>
            <td style="padding: 5px;">{{ $data['phone'] }}</td>
        </tr>
        @endif
        <tr>
            <td style="font-weight: bold; padding: 5px; vertical-align: top;">Message:</td>
            <td style="padding: 5px;">{{ $data['message'] }}</td>
        </tr>
    </table>

    <p style="font-size: 16px;">Thanks,<br><strong>{{ config('app.name') }}</strong></p>
</div>
@endcomponent
