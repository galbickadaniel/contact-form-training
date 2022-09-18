<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barber posiela mail</title>
</head>
<body>
    <h1>Barber posiela mail</h1>
    <p>Name: {{ $mailData->name }}</p>
    <p>Tel cislo: {{ $mailData->phone_number }}</p>
    <p>Vasa sprava: {{$mailData->message}}</p>
</body>
</html>
