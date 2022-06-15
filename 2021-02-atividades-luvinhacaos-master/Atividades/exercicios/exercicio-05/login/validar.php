<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="validar.css">
  <title>Document</title>
</head>

<body>
  <?php

  $user = $_POST['usuario'];
  $senha = $_POST['password'];

  echo "<h1>Olá $user, seguem seus dados!</h1>";
  echo "<h3>Usuário: $user <br> Senha: $senha</h3>";

  ?>
</body>

</html>