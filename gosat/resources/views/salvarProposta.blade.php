<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <title>Simulações</title>
</head>
<script>
    function redirect() {
        window.location.href = "http://localhost:8000/";

    }
</script>

<body>
    <h1>Simulação</h1>
    <p>Prontinho! seus dados foram salvos!</p>



    <button onclick=redirect()>Salvar</button>





</body>