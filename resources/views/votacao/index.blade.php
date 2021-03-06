<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cipa2022</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
    <h3 style="color: #3b9143;">SOUZACAMBOS</h3>
</nav>

<div class="container">


    <h1>Processo Eleitoral - Cipa</h1>
        <h2>Gestão - 2022/2023</h2>
    <hr/>
        <h3>Bem vindo, {{ $pessoa }}</h3>
        <br>
        <h1>A VOTAÇÃO JA FOI ENCERRADA, OBRIGADO POR PARTICIPAR.</h1>
        <div class="pull-right">
            <form action="{{ route('logout') }}" method="POST">
                <div class="col-xs-6 text-center">
                    {{ csrf_field() }}
                    <button onclick="if(!confirm('Deseja sair do sistema?')){return false}" class="btn btn-danger" type="submit" class="button">Sair</button>
                </div>
            </form>
        </div>
        @if($usuario == true)
            <hr>
            <form>
                <a href="{{route('imprimir') }}" class="btn btn-success" value="Salvar Comprovante">Salvar Comprovante</a>
            </form>
        @endif
@if($admin == '12202526625')    {{-- encerrar votacao --}}
    @if($usuario == false)
            <h4>Escolha o candidato de sua preferência e clique em cima de seu nome para salvar o voto.</h4>
            <h4>Para votos brancos ou nulos basta clicar em seus respectivos botões.</h4>
        <hr>
        <br>
        <div class="form-group">
            <label for="candidato">CANDIDATOS :</label><hr>
            @foreach($candidatos as $candidato)
            <ul>@if ($candidato->name == 'BRANCO')
                    <a style="font-size: 15px" onclick="if(!confirm('Deseja confirmar seu voto em {{ $candidato->name }} ?')){return false}" href="{{ route('salvar',$candidato->id) }}" class="btn btn-default" >{{ $candidato->name }}</a>

                @elseif ($candidato->name == 'NULO')
                    <a style="font-size: 15px" onclick="if(!confirm('Deseja confirmar seu voto em {{ $candidato->name }} ?')){return false}" href="{{ route('salvar',$candidato->id) }}" class="btn btn-dark">{{ $candidato->name }}</a>

                @elseif ($candidato->name != 'NULO' and $candidato->name != 'BRANCO')
                    <a style="font-size: 15px" onclick="if(!confirm('Deseja confirmar seu voto em {{ $candidato->name }} ?')){return false}" href="{{ route('salvar',$candidato->id) }}" class="btn btn-success">{{ $candidato->name }}</a>
                @endif
            </ul>
            @endforeach
        </div>
    @endif
@endif

</div>

</body>
</html>


