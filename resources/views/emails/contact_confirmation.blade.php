<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Message Received</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #fff5f5; margin: 0; padding: 20px; color: #333;">
    <div style="max-width: 600px; margin: auto; background: #ffffff; border-radius: 10px; padding: 25px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); border-top: 5px solid #E94E4E;">
        
        <h2 style="color: #E94E4E; margin-bottom: 20px;">Hello {{ $data['name'] }},</h2>

        <p style="font-size: 16px;">We have received your message and will be in touch with you soon.</p>

        <div style="background-color: #ffe5e5; padding: 15px; border-left: 4px solid #E94E4E; margin: 20px 0; border-radius: 5px;">
            <strong>Your Message:</strong><br>
            @if(!empty($data['location']))
                <p><strong>Location:</strong> {{ $data['location'] }}</p>
            @endif
            @if(!empty($data['project_details']))
                <p><strong>Project Details:</strong> {{ $data['project_details'] }}</p>
            @endif
            <p>{{ $data['message'] }}</p>
            @if(!empty($data['images']))
                <p><strong>Images:</strong></p>
                <ul>
                    @foreach($data['images'] as $img)
                        <li><a href="{{ $img }}">{{ $img }}</a></li>
                    @endforeach
                </ul>
            @endif
        </div>

        <p style="font-size: 16px;">Thanks,<br><strong>Mishor</strong></p>
    </div>
</body>
</html>
