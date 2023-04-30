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

    <form id="proposta-form" method="GET" action="{{ url('/propostas') }}" style="display:none;">
        @csrf
 
    </form>

    <button onclick="submitForm()">Enviar</button>



</body>

</html>