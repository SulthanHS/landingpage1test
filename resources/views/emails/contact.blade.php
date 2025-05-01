<!DOCTYPE html>
<html>
<head>
    <title>New Contact Form Submission</title>
</head>
<body>
    <h2>New Contact Form Submission</h2>

    <p><strong>Name:</strong> {{ $name }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Message:</strong></p>
    <p>{!! nl2br(e($message)) !!}</p>

    <hr>
    <p>This message was sent from your portfolio website contact form.</p>
</body>
</html>
