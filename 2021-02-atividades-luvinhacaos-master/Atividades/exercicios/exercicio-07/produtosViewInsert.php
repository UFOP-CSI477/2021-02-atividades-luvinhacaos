<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="produtos.css">
  <title>Inserir Produtos</title>
</head>

<body>

  <h1> Cadastro de Produtos </h1>

  <form action="produtosControllerInsert.php" method="post">

    <label for="id">Insira o ID do produto:</label>
    <input type="text" name="id">

    <label for="nome">Insira o nome:</label>
    <input type="text" name="nome">

    <label for="um">Insira a unidade de medida:</label>
    <input type="text" name="um">

    <input type="submit" value="Enviar" id="btn-cadastrar">

  </form>

</body>

</html>