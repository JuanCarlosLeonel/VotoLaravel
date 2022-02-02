<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cipa2022</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
    <h3 style="color: #3b9143;">SOUZACAMBOS</h3>
</nav>
@if($admin == '12202526625' || $admin == '06737124607')
<div class="container">
        <h1>Processo Eleitoral - Cipa</h1>
        <h2>Gestão - 2022/2023</h2>
    <hr/>
    <h3>Lista de Candidatos e seus votos em ordem do mais votado para o menos votado.</h3>

    @foreach($dados as $candidato)
        <h4><ul>{{ $candidato->name }} = <b>{{ $candidato->votos }}</b></ul></h4>
    @endforeach
    <hr>

    @if($porcentagem < 50)
        <h2>Porcentagem total de votos válidos : <b>{{number_format($porcentagem,2,',','.') }} %</b></h2>
    @endif
    @if($porcentagem > 50)
        <h2>Porcentagem total de votos válidos : <b style="color: #3b9143;">{{number_format($porcentagem,2,',','.') }} %.</b> A votação ja pode ser encerrada.</h2>
    @endif

    <hr>
    <h2>Total de Colaboradores na Empresa : <b>{{ $contcola }}</b></h2>
    <h2>Total e Listagem de colaboradores que ja votaram : <b>{{ $cont }}</b></h2>
</div>
    <div class="content">
        <div class="container">
            @foreach($pessoas as $pessoa)
                <h5><li>{{ $pessoa->name }}</li></h5>
            @endforeach <br>
            <hr>
        </div>
    </div>
@endif

</body>
</html>
