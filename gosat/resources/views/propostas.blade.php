<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <title>Simulações</title>
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
    <p>Instituição Financeira: {{ $oferta['instituicaoFinanceira'] }}</p>
    <p>Valor a Pagar: {{ $oferta['valorAPagar'] }}</p>
    <p>Valor Solicitado: {{ $oferta['valorSolicitado'] }}</p>
    <p>Taxa de Juros: {{ $oferta['taxaJuros'] }}</p>
    <p>Quantidade de Parcelas: {{ $oferta['qntParcelas'] }}</p>
    <p> ----------------------------------</p>
@endforeach

<button
    onclick=redirect()
    >Salvar</button>

   



</body>