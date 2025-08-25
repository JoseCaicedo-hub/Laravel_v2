<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructura Switch</title>
</head>
<body>
    <p>

        @switch($numero) 
            @case(1)
                Lunes
                @break
            @case(2)
                Martes
                @break
            @case(3)
                Miercoles
                @break
            @case(4)
                Jueves
                @break
            @case(5)
                Viernes
                @break
            @case(6)
                Sabado 
                @break
            @case(7)
                Domingo
                @break
            @default
                Error
                @break
        @endswitch


    </p>
</body>
</html>