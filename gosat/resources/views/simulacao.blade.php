<!DOCTYPE html>
<html lang="pt-br">

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



</body>

</html>