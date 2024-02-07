<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js',])              {{-- Isso veio do vite.config.js --}}

    {{-- @yield exibe o conteudo de uma determinada sessao --}}
    <title>@yield("title")</title>
</head>

<body>
    <header>
        @include('layout.nav')        {{-- Vai puxar do nav.blade no header --}}
    </header>


    <main>
        <div class="container">
            @yield("content")
        </div>
    </main>

    
    @include("layout.footer")


</body>
</html>