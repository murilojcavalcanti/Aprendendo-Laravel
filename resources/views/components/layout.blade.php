<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>{{ $title }}</title>
</head>

<body>
    <div class = "container">
        <h1>{{ $title }}</h1>

        <!-- 
        A variavel errors é uma coleção ja criada pelo laravel que recebe os erros que acontecem dentro de uma requisição
        o if retorna uma mensagem de erro e fala qual é o erro na pagina index -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{ $slot }}

    </div>

</body>

</html>
