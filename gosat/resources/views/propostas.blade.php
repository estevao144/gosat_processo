<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <title>Simulações</title>
</head>
<script>

</script>

<body>
    <h1>Simulação</h1>
    <p>A melhor Simulação de todas!</p>
    <h1>Proposta</h1>
    <p>Quantidade mínima de parcelas: {{ $QntParcelaMin }}</p>
    <p>Quantidade máxima de parcelas: {{ $QntParcelaMax }}</p>
    <p>Valor mínimo: {{ $valorMin }}</p>
    <p>Valor máximo: {{ $valorMax }}</p>
    <p>Juros por mês: {{ $jurosMes }}</p>

</body>