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

<div class="container">

    <h1>Processo Eleitoral - Cipa</h1>
        <h2>Gestão - 2022/2023</h2>

    <hr />

    <form action="{{ route('login') }}" method="POST">
        @csrf
      <div class="form-group">
        <label style="font-size: 15px" for="username">CPF</label>
        <input type="number" id="username" name="username" class="form-control" placeholder="Digite aqui seu CPF para entrar">
      </div>

      <div class="form-group">
        <label  style="font-size: 15px" for="password">SENHA</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Sua senha é seu número de matrícula">
      </div>

      <button style="font-size: 20px" type="submit" class="btn btn-success">Entrar</button>
    </form>

</div>

</body>
</html>
