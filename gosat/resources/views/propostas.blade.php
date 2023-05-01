<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <title>Simulações</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<script>
    function redirect () {
        window.location.href = "http://localhost:8000/salvarPropostas";

    }

    
</script>

<body>
    <h1>Simulação</h1>
    <p>Aqui todas as condições disponiveis.</p>

    @foreach($ofertasTratadas as $oferta)
    <div class="container_results">
    <div>
    <div class="results">Instituição Financeira: {{ $oferta['instituicaoFinanceira'] }}</div>
    <div class="results">Valor a Pagar: {{ $oferta['valorAPagar'] }}</div>
    <div class="results">Valor Solicitado: {{ $oferta['valorSolicitado'] }}</div>
    <div class="results">Taxa de Juros: {{ $oferta['taxaJuros'] }}</div>
    <div class="results">Quantidade de Parcelas: {{ $oferta['qntParcelas'] }}</div>
    </div>
    </div>
@endforeach

<button
    onclick=redirect()
    >Salvar</button>

   



</body>