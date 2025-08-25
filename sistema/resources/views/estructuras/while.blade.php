<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>{{ $numero }}</p>

    @while($numero>0)
        <p> {{ $numero -= 1}}</p>
    @endwhile
</body>
</html>