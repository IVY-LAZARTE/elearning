<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>correo electronico</h1>
    <p>este es el primer correo electronico que mando por laravel</p>
    <p><strong>Nombre:</strong>{{$contacto['name']}}</p>
    <p><strong>correo:</strong>{{$contacto['correo']}}</p>
    <p><strong>mensaje:</strong>{{$contacto['mensaje']}}</p>
</body>
</html>