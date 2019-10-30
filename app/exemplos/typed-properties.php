<?php

$conteudo = [
  'titulo' => 'PHP 7.4 - Typed Properties 2.0',
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

      <p>Com Typed Properties 2.0 agora podemos definir os tipos de dados das propriedades de nossas classes:</p>
      
      <pre class="prettyprint">
        <code>
          class Pessoa
          { 
            public string $nome;
            public int $idade;

            public function sobre(){
              echo sprintf('Meu nome é %s e tenho %d ano(s).', $this->nome, $this->idade);
            }
          }

          $pessoa = new Pessoa();
          $pessoa->nome = 'Pedro';
          $pessoa->idade = 15;
          $pessoa->sobre(); //Meu nome é Pedro e tenho 15 ano(s).
        </code>
      </pre>

      <p>O código acima resultará na seguinte saída:</p>

      <pre class="prettyprint">
        <code class="language-php">
          <?php
            class Pessoa
            { 
              public string $nome;
              public int $idade;
            
              public function sobre(){
                return sprintf('Meu nome é %s e tenho %d ano(s).', $this->nome, $this->idade);
              }
            }
            
            $pessoa = new Pessoa();
            $pessoa->nome = 'Pedro';
            $pessoa->idade = 15;
            echo $pessoa->sobre();
          ?>
        </code>
      </pre>
    </div>
    <!-- FIM DO EXEMPLO 1 -->

    <!-- EXEMPLO 2 -->
    <div class="example">
      <h3> Exemplo 2</h3>

      <p>Caso se queira iniciar ou atribuir valor null a uma propriedade devemos utilizar os nullables types. Para isso basta adicionar um simbolo de interrogação (?) antes do tipo:</p>
      
      <pre class="prettyprint">
        <code>
          class Pessoa
          { 
            public string $nome;
            public ?string $sobrenome = null;
          }

          $pessoa = new Pessoa();
          $pessoa->nome = 'Mário';
          echo sprintf('Meu nome é %s e me sobrenome é %s', $pessoa->nome, $pessoa->sobrenome);
        </code>
      </pre>

      <p>O código acima resultará na seguinte saída (sobrenome é nulo):</p>

      <pre class="prettyprint">
        <code class="language-php">
          <?php
            // CÓDIGO DO EXEMPLO 2
            class Individuo
            { 
              public string $nome;
              public ?string $sobrenome = null;
            }

            $individuo = new Individuo();
            $individuo->nome = 'Mário';
            echo sprintf('Meu nome é %s e meu sobrenome é %s', $individuo->nome, $individuo->sobrenome);
          ?>
        </code>
      </pre>
    </div>
    <!-- FIM DO EXEMPLO 2 -->
    <a href="./index.php" class="myButton">Voltar</a>
  </div>
</body>

</html>