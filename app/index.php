<?php

$conteudo = [
  'titulo' => 'PHP 7.4 - Novas Funcionalidades',
  'subtitulo' => 'Pronto para conhecer as novas funcionalidades do PHP 7.4?'
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
  <script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js?autoload=true&amp;skin=sunburst&amp"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="./assets/script.js"></script>
  <link rel="stylesheet" type="text/css" href="./assets/style.css">
</head>

<body>
  <div class="container">
    <h1><?= $conteudo['titulo'] ?></h1>
    <h3><?= $conteudo['subtitulo'] ?></h3>

    <!-- EXEMPLO 1 -->
    <div class="example">
      <h3>Como começar?</h3>

      <p>Os arquivos contendo as novas funcionalidades do PHP 7.4 devem ser criados no diretório <b>\app</b>. Após isso, basta acessá-lo através do endereço http://localhost/{arquivo.php}.</p>
      
    </div>
  </div>
</body>

</html>