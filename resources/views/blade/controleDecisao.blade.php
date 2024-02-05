<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    {{-- Os controles de decisao sao diretivas. TOdas diretivas começam com @ --}}

    {{-- IF:  @if e @endif--}}
    @if(10 > 5)
        <p>10 é maior que 5</p>
    @endif


    {{-- IF com ELSE --}}
    @if(11 > 10)
        <p>Verdadeiro</p>
    @else
        <p>Falso</p>
    @endif


    {{-- IF, ELSE IF, ELSE --}}

    @if($n < 10)
    <p>{{$n}} é menor que 10</p>
    
    @elseif($n >= 10 && $n < 100)
    <p>{{$n}} esta entre 10 e 100</p>

    @else
    <p>{{$n}} é maior que 100</p>

    @endif


    {{-- UNLESS é o !if, ou seja, sefor falso executa --}}

    @UNLESS(1 != 1)
        Falso
    @endunless


    {{-- ISSET -> Verifica se a variavel foi setada --}}

    @ISSET($idade)
    <p> Idade: {{$idade}} </p>
    @endisset


    {{-- EMPTY, verifica se a variavel esta vazia (zero, null, ""vazia vai retornar como true--}}
    @empty($n)
        <p>Variavel Vazia</p>
    @endempty



    {{-- DIRETIVAS DE AUTENTICAÇÃO --}}

    @auth()     {{-- @auth() -> verifica qualquer sessão  // @auth("nomeSessao") -> busca somente o nome buscado --}}
        <p>Usuário Logado</p>
    @endauth

    {{-- Guest é verificada a permissao (deletar ou mexer em algo) --}}
    @guest()
        
    @endguest
</body>
</html>