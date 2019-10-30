<?php

$conteudo = [
  'titulo' => 'PHP 7.4 - Arrow Functions',
  'subtitulo' => ''
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
  <script src="../assets/script.js"></script>
  <link rel="stylesheet" type="text/css" href="../assets/style.css">
</head>

<body>
  <div class="container">
    <h1><?= $conteudo['titulo'] ?></h1>
    <h3><?= $conteudo['subtitulo'] ?></h3>

    <!-- EXEMPLO 1 -->
    <div class="example">
      <h3> Exemplo 1</h3>

      <p>Para criar uma arrow function basta usar a seguinte sintaxe <b>fn(parameter_list) => expr</b>. Observe abaixo a comparação de uma clousure e uma arrow function que retornam o mesmo resultado:</p>
      
      <pre class="prettyprint">
        <code>
            //Função anônima
            $retorno1 = array_map(function($valor){
              return $valor * $valor;
            }, [1, 2, 3, 4]);
            print_r($retorno1);

            //Arrow function
            $retorno2 = array_map(fn($valor) => $valor * $valor, [1, 2, 3, 4]);
            print_r($retorno2);
        </code>
      </pre>

      <p>O código acima resultará na seguinte saída:</p>

      <pre class="prettyprint">
        <code class="language-php">
          <?php
            // CÓDIGO DO EXEMPLO 1
            //Função anônima
            $retorno1 = array_map(function($valor){
              return $valor * $valor;
            }, [1, 2, 3, 4]);
            print_r($retorno1);

            //Arrow function
            $retorno2 = array_map(fn($valor) => $valor * $valor, [1, 2, 3, 4]);
            print_r($retorno2);
          ?>
        </code>
      </pre>
    </div>
    <!-- FIM DO EXEMPLO 1 -->

    <!-- EXEMPLO 2 -->
    <div class="example">
      <h3> Exemplo 2</h3>

      <p>Arrow functions tem acesso a variáveis externas sem a necessidade de definição explícita.</p>
      
      <pre class="prettyprint">
        <code>
          $multiplicador = 2;

          $numerosMultiplicados = array_map(fn($numero) => $numero * $multiplicador, [1, 2, 3, 4, 5]);
          print_r($numerosMultiplicados);
        </code>
      </pre>

      <p>O código acima resultará na seguinte saída:</p>

      <pre class="prettyprint">
        <code class="language-php">
          <?php
            // CÓDIGO DO EXEMPLO 2
            $multiplicador = 2;

            $numerosMultiplicados = array_map(fn($numero) => $numero * $multiplicador, [1, 2, 3, 4, 5]);
            print_r($numerosMultiplicados);
          ?>
        </code>
      </pre>
    </div>
    <!-- FIM DO EXEMPLO 2 -->
    <a href="./index.php" class="myButton">Voltar</a>
  </div>
</body>

</html>