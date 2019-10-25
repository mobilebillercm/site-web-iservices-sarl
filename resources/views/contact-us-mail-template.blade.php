<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>

<div>
    Hi {{ $user->name.' ' . $user->surname }},
    <br>
    Thank you for contacting us. Your message has been received by our system. We will get back to you soon.

    <br><a href="{{$iservicehome_url}}">iService Home Page</a>

    <br/>
</div>

</body>
</html>
