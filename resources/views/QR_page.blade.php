<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QR</title>
</head>
<body>
    <img src="{{ $qrcodePath }}" alt="{{ $name->name }}">
    <a href="{{ $qrcodePath }}" download="{{ $filename }}">Download</a>

</body>
</html>
