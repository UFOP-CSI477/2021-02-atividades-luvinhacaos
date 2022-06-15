<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="produtos.css">

  <title>Produtos</title>
</head>

<body>

  <h1> Produtos </h1>
  <h2> <a href="produtosViewInsert.php">Inserir</a> </h2>

  <table class="table table-bordered">

    <tr>
      <th>Id</th>
      <th>Nome</th>
      <th>Unidade de Medida</th>
    </tr>
    <?php
    while ($p = $produtos->fetch()) {
      echo "<tr>";
      echo "<td> $p[id] </td>";
      echo "<td> $p[nome] </td>";
      echo "<td> $p[um] </td>";
      echo "</tr>";
    }
    ?>
  </table>

</body>

</html>