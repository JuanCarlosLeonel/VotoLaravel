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
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            window.print()
        })
    </script>
</head>
<body>
<div class="container">

    <h1>Processo Eleitoral - Cipa</h1>
        <h2>Gestão - 2022/2023</h2>
    <hr/>
        <h3>Obrigado por votar.</h3>
        <h4>Participar das eleições da CIPA é um ato de promoção da segurança e da saúde do trabalhador!</h4>
        <br>
        <h4>COMPROVANTE DE VOTAÇÃO ELEIÇÃO -COMISSÃO INTERNA DE PREVENÇÃO DE ACIDENTES-CIPA</h4>
        <h4>GESTÃO 2022/2023</h4>
        <h4>CNPJ: 673319910001-66</h4>
        <h4>FUNCIONÁRIO: {{ $usuario->name }}</h4>
        <h4>MATRÍCULA: {{ $matricula }}</h4>


    <hr>

    <br>


</div>

</body>
</html>


