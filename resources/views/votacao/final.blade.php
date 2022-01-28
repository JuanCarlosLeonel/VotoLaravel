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
    <div class="pull-right">
        <form action="{{ route('logout') }}" method="POST">
            <div class="col-xs-6 text-center">
                {{ csrf_field() }}
                <button onclick="if(!confirm('Deseja sair do sistema?')){return false}" class="btn btn-danger" type="submit" class="button">Sair</button>
            </div>
        </form>
    </div>

    <h1>Processo Eleitoral - Cipa</h1>
        <h2>Gestão - 2022/2023</h2>

    <hr/>
        <h3>Obrigado pela participação, {{ $user->name }} !</h3>
        <br>
        <h4>Seu voto foi salvo com sucesso!</h4>

        <?php
        $Object = new DateTime();
        $Object->setTimezone(new DateTimeZone('America/Sao_Paulo'));
        $DateAndTime = $Object->format("d-m-Y h:i:s a");
        ?>
        <h4>{{ $DateAndTime }}</h4>

    <hr>

    <br>


</div>

</body>
</html>

