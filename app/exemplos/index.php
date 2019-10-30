<?php

$conteudo = [
  'titulo' => 'Novas funcionalidades do PHP 7.4',
  'subtitulo' => 'Clique no link da funcionalidade para ver seu funcoinamento.'
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Exemplos - Novas Funcionalidades do PHP 7.4</title>
  <link href="https://fonts.googleapis.com/css?family=Alegreya:400italic,700italic,400,700" rel="stylesheet" type="text/css">
  <script src="../assets/script.js"></script>
  <link rel="stylesheet" type="text/css" href="../assets/style.css">
</head>

<body>
  <div class="container">
    <h1><?= $conteudo['titulo'] ?></h1>
    <h3><?= $conteudo['subtitulo'] ?></h3>

    <ol class="itens">
      <li><a href="spread-operator.php">Spread Operator</a></li>
      <li><a href="arrow-functions.php">Arrow Functions</a></li>
      <li><a href="typed-properties.php">Typed Properties</a></li>
    </ol>
  </div>
</body>

</html>