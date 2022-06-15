<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <title>Validação</title>

</head>

<body>

  <h1> Login </h1>
  <div id="linha"> </div>

  <form action="/login/validar.php" method="post">

    <label for="usuario">Usuário</label>
    <input type="text" name="usuario" placeholder="Insira seu usuário">

    <label for="password">Senha</label>
    <input type="password" name="password placeholder=" Insira sua senha">

    <input type="submit" value="Validar" name="btn">

  </form>


</body>

</html>