<?php

$conteudo = [
  'titulo' => 'PHP 7.4 - Spread Operator',
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

      <p>Usando o Spread Operator (...) podemos "espalhar" os elementos de um array e utiliza-los na criação de um outro array:</p>
      
      <pre class="prettyprint">
        <code>
          $parts = ['apple', 'orange', 'strawberry'];
          $fruits = ['mango', ...$parts, 'pear'];

          print_r($fruits);
        </code>
      </pre>

      <p>O código acima resultará na seguinte saída:</p>

      <pre class="prettyprint">
        <code class="language-php">
          <?php
            // CÓDIGO DO EXEMPLO 1
            $parts = ['apple', 'orange', 'strawberry'];
            $fruits = ['mango', ...$parts, 'pear'];
            
            print_r($fruits);
          ?>
        </code>
      </pre>
    </div>
    <!-- FIM DO EXEMPLO 1 -->

    <!-- EXEMPLO 2 -->
    <div class="example">
      <h3> Exemplo 2</h3>

      <p>Um array pode ser espalhado múltiplas vezes:</p>
      
      <pre class="prettyprint">
        <code>
          $arr1 = [1, 2, 3];
          $arr2 = [4, 5, 6];
          $arr3 = [...$arr1, ...$arr2];
          $arr4 = [...$arr1, ...$arr3, 7, 8, 9];
          print_r($arr4);
        </code>
      </pre>

      <p>O código acima resultará na seguinte saída:</p>

      <pre class="prettyprint">
        <code class="language-php">
          <?php
            // CÓDIGO DO EXEMPLO 2
            $arr1 = [1, 2, 3];
            $arr2 = [4, 5, 6];
            $arr3 = [...$arr1, ...$arr2];
            $arr4 = [...$arr1, ...$arr3, 7, 8, 9];
            print_r($arr4);
          ?>
        </code>
      </pre>
    </div>
    <!-- FIM DO EXEMPLO 2 -->

    <!-- EXEMPLO 3 -->
    <div class="example">
      <h3> Exemplo 3</h3>

      <p>Também é possível desempacotar arrays retornados por uma função:</p>
      
      <pre class="prettyprint">
        <code>
          function getFruitsArray(){
            return ['apple', 'orange'];
          }

          $fruits = ['banana', 'mango', ...getFruitsArray()];
          print_r($fruits);
        </code>
      </pre>

      <p>O código acima resultará na seguinte saída:</p>

      <pre class="prettyprint">
        <code class="language-php">
          <?php
            // CÓDIGO DO EXEMPLO 3
            function getFruitsArray(){
              return ['apple', 'orange'];
            }
  
            $fruits = ['banana', 'mango', ...getFruitsArray()];
            print_r($fruits);
          ?>
        </code>
      </pre>
    </div>
    <!-- FIM DO EXEMPLO 3 -->

    <!-- EXEMPLO 4 -->
    <div class="example">
      <h3> Exemplo 4</h3>

      <p>Se passarmos um valor por referência para um primeiro array, esse valor também será repassado por referência para os demais arrays:</p>
      
      <pre class="prettyprint">
        <code>
        $one = 1;
        $arr1 = [&$one, 2, 3];
        $arr2 = [0, ...$arr1];
        echo 'Conteúdo do array antes da mudança do valor de $one:';
        print_r($arr2);

        $one = 99;
        echo 'Conteúdo do array após a mudança do valor de $one:';
        print_r($arr2);
        </code>
      </pre>

      <p>O código acima resultará na seguinte saída:</p>

      <pre class="prettyprint">
        <code class="language-php">
          <?php
            // CÓDIGO DO EXEMPLO 4
            $one = 1;
            $arr1 = [&$one, 2, 3];
            $arr2 = [0, ...$arr1];
            echo 'Conteúdo do array antes da mudança do valor de $one: <br />';
            print_r($arr2);

            $one = 99;
            echo 'Conteúdo do array após a mudança do valor de $one: <br />';
            print_r($arr2);
          ?>
        </code>
      </pre>
    </div>
    <!-- FIM DO EXEMPLO 4 -->
    <a href="./index.php" class="myButton">Voltar</a>
  </div>
</body>

</html>