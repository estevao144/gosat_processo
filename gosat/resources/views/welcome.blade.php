<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>gosat</title>    
    </head>
    <body class="antialiased">
       <h1>Simulação de crédito</h1>
         <p>Para melhor atende-lo, digite seu</p>
            <p> CPF abaixo para simular suas opções:</p>
            <form action="/simulacao" method="get">
                @csrf
                <input type="text" name="cpf" placeholder="Digite seu CPF">
                <button type="submit">Simular</button>
            </form>
    </body>
</html>
