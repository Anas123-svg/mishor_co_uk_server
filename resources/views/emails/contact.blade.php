<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Contact Message</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #fff5f5; margin: 0; padding: 20px; color: #333;">
    <div style="max-width: 600px; margin: auto; background: #ffffff; border-radius: 10px; padding: 25px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); border-top: 5px solid #E94E4E;">
        
        <h2 style="color: #E94E4E; margin-bottom: 20px;">New Contact Message</h2>

        <table style="width: 100%; border-collapse: collapse; font-size: 16px;">
            <tr>
                <td style="font-weight: bold; padding: 8px; width: 120px;">Name:</td>
                <td style="padding: 8px;">{{ $data['name'] }}</td>
            </tr>
            <tr>
                <td style="font-weight: bold; padding: 8px;">Email:</td>
                <td style="padding: 8px;">{{ $data['email'] }}</td>
            </tr>
            @if(!empty($data['whatsapp']))
            <tr>
                <td style="font-weight: bold; padding: 8px;">WhatsApp:</td>
                <td style="padding: 8px;">{{ $data['whatsapp'] }}</td>
            </tr>
            @endif
            @if(!empty($data['phone']))
            <tr>
                <td style="font-weight: bold; padding: 8px;">Phone:</td>
                <td style="padding: 8px;">{{ $data['phone'] }}</td>
            </tr>
            @endif
            @if(!empty($data['location']))
            <tr>
                <td style="font-weight: bold; padding: 8px;">Location:</td>
                <td style="padding: 8px;">{{ $data['location'] }}</td>
            </tr>
            @endif
            @if(!empty($data['project_details']))
            <tr>
                <td style="font-weight: bold; padding: 8px; vertical-align: top;">Project Details:</td>
                <td style="padding: 8px;">{{ $data['project_details'] }}</td>
            </tr>
            @endif
            @if(!empty($data['images']))
            <tr>
                <td style="font-weight: bold; padding: 8px; vertical-align: top;">Images:</td>
                <td style="padding: 8px;">
                    @foreach($data['images'] as $img)
                        <p><img src="{{ $img }}" alt="Image" style="max-width: 100%; height: auto; margin-bottom: 10px; border-radius: 5px;"></p>
                    @endforeach
                </td>
            </tr>
            @endif
            @if(!empty($data['message']))
            <tr>
                <td style="font-weight: bold; padding: 8px; vertical-align: top;">Message:</td>
                <td style="padding: 8px;">{{ $data['message'] }}</td>
            </tr>
            @endif
        </table>

        <p style="margin-top: 25px; font-size: 16px;">Thanks,<br><strong>Mishor</strong></p>
    </div>
</body>
</html>
