<!DOCTYPE html>
<html lang="pt-br">

<script>
    function submitForm() {
        document.getElementById("proposta-form").submit();
    }
</script>

<head>
    <meta charset="UTF-8">
    <title>Simulação</title>
</head>

<body>
    <h1>Simulação</h1>


    @foreach($data['instituicoes'] as $instituicao)
    <h2>{{ $instituicao['nome'] }}</h2>
    @foreach($instituicao['modalidades'] as $modalidade)
    <p>Nome: {{ $modalidade['nome'] }}</p>
    <p>Código: {{ $modalidade['cod'] }}</p>
    @endforeach
    @endforeach
    <p> QntParcelaMax: {{ $data1['QntParcelaMax'] }}</p>
    <p> QntParcelaMin: {{ $data1['QntParcelaMin'] }}</p>
    <p> valorMax: {{ $data1['valorMax'] }}</p>

    <form id="proposta-form" method="GET" action="{{ url('/propostas') }}" style="display:none;">
        @csrf
        <input type="hidden" name="QntParcelaMin" value="{{ $data1['QntParcelaMin'] }}">
        <input type="hidden" name="QntParcelaMax" value="{{ $data1['QntParcelaMax'] }}">
        <input type="hidden" name="valorMin" value="{{ $data1['valorMin'] }}">
        <input type="hidden" name="valorMax" value="{{ $data1['valorMax'] }}">
        <input type="hidden" name="jurosMes" value="{{ $data1['jurosMes'] }}">
    </form>

    <button onclick="submitForm()">Enviar</button>



</body>

</html>