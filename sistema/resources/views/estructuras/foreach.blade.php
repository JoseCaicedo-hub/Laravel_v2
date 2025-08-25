<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructura foreach</title>
</head>
<body>
    @foreach($lista as $objeto)

        <p>{{$objeto}}</p>

    @endforeach


    @php
        function sumar($numero1, $numero2){
            return $numero1 + $numero2;
        }
    @endphp
            <p>resultado: {{ sumar(10,5) }}</p>
</body>
</html>