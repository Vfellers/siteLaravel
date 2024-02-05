<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Expressoes com Blade</h1>

    {{-- Comentário de Blade --}}
    {{-- Pegar os dados que vem da rota ou controller quando tiver --}}
    {{-- Realiza o escape automatico que evita XSS (hackers)  --}}
    <p>Nome: {{$nome}}</p>       {{-- Puxa o $nome do routes/web.php --}}


</body>
</html>