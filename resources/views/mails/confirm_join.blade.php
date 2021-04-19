<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <style type="text/css">
        
        body {
            font-family: 'Nunito', sans-serif;
            background-image: url("../resources/images/fondo1.jpg");
            background-repeat: no-repeat, repeat;
            background-size: 100% 100%;
            min-height: 900px;
        }
    </style>
    <title>Gracias por registrarse</title>
</head>
<body>
    <p>Hola {{ $name }}.</p>
    <p>Te haz registrado exitosamente!</p>
    <ul>
        <li>Nombre: {{ $name }}</li>
        <li>Correo: {{ $email }}</li>
        <li>Teléfono: {{ $telefono }}</li>
        <li>Fecha de Nacimiento: {{ $birthday }}</li>
    </ul>
    <img src={{$image_url}} alt="Imagen de Perfil" />
    <p>Si no puedes ver la imagen, da <a href={{$image_url}}>click aqui</a></p>

</body>
</html>