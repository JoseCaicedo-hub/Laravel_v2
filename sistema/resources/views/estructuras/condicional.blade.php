<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructuras de control</title>
</head>
<body>
    
    <h1>Su nota es: {{$nota}}</h1>
    
    <p>
        Situacion:

        @if($nota >= 2.96)
            Aprobado
        @else
            No aprobado
        @endif()

    </p>

    <p>
        Categoria: 
        @if($nota >= 0 && $nota<=1)
            Pesimo
        @elseif($nota>1 && $nota<= 2)
            Bajo
        @elseif($nota>2 && $nota<= 2.95)
            Regular
        @elseif($nota>2.95 && $nota<= 3.95)
            Buena
        @elseif($nota>3.95 && $nota<= 5.0)
            Excelente
        @else
            Nota invalida
        @endif
    </p>

</body>
</html>