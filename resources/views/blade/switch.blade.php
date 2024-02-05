<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Switch case com BLADE</h1>    

    @Switch($numero)
        @case(1)
        <p>Número UM</p>
        @break

        @case(2)
        <p>Número DOIS</p>
        @break

        @case(3)
        <p>Número TRÊS</p>
        @break

        @default
        <p>Número Invalido</p>
    @endswitch


</body>
</html>