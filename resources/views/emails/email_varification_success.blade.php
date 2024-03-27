<!DOCTYPE html>
<html>

<head>
    <title>kaamindia email verification</title>
</head>

<body>
    @foreach($data as $userDetail)
    <p>Hi {{ $userDetail->name }},</p>
    <p>Welcome to the kaamindia App.</p>

    <h3>Email verified successfull</h3>
    <p>If you have any questions or need some help, we love to hear from you. Just reply to this email, or email us at <a href="mailto:info@kaamindia.co" style="color:#15c;">info@kaamindia.co</a> and we will get back to you soon. </p>
    <p>See you on kaamindia!</p>
    <p>Thank you</p>
    @endforeach
</body>

</html>