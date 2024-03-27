<!DOCTYPE html>
<html>

<head>
    <title>kaamindia email verification</title>
</head>

<body>
    @foreach ($data as $userData)
    <p>Hi {{ $userData->name }},</p>
    <p>Welcome to the kaamindia App.</p>
    <p>
        <a class="btn" style="color: #15c;" href="{{ URL('auth/email-verification/'.base64_encode($userData->email)) }}">
            Please click here to confirm your email address
        </a>
    </p>
    <p>If you have any problems with verifying your email address, try copying and pasting the following link into your browser: </p>
    <p>{{ URL('/email-verification/'.base64_encode($userData->email)) }}</p>
    <p>If you have any questions or need some help, wed love to hear from you. Just reply to this email, or email us at <a href="mailto:info@kaamindia.co" style="color:#15c;">info@kaamindia.co</a> and we will get back to you soon. </p>
    <p>See you on kaamindia!</p>
    <p>Thank you</p>
    @endforeach
</body>

</html>