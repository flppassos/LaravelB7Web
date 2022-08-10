<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
    <title>Exercício 1</title>
</head>
<body>

    <div class="content">

        @foreach ($pessoas as $p)

            @component('components.card')
                @slot('image')
                    {{$p['image']}}
                @endslot
                @slot('nome')
                    {{$p['nome']}}
                @endslot
                @slot('idade')
                    {{$p['idade']}}
                @endslot
                @slot('birth')
                    {{$p['birth']}}
                @endslot
            @endcomponent

        @endforeach

    </div>

</body>
</html>
