<!DOCTYPE html>
<html>
<head>
    <title>REGISTER</title>
</head>
<body>
    <h1>{{ $mailData['title'] }}</h1>
    <p>{{ $mailData['body'] }}</p>
    <a href="{{ $mailData['confirmUrl'] }}">Confirm</a>
     
    <p>Thank you</p>
</body>
</html>