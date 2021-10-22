<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $num = isset($_GET["num"])?$_GET["num"]:1;
        echo "<h3>Analisando o número $num ...</h3>";
        $cont = 0;
        echo "Valores múltiplos: ";
        for ($mult=1;$mult<=$num;$mult++) {
          $rest = $num % $mult;
          if ($rest == 0) {
            echo "$mult ";
            $cont++;
          }
        }
        echo "<br><br>Total de múltiplos: $cont<br>";
        
        if ($cont == 2) {
          echo "<br>Resultado: $num <span class='foco'>É PRIMO!</span><br>";
        }
        else {
          echo "<br>Resultado: $num <span class='foco'>NÃO É PRIMO!</span><br>";
        }
    ?>
    <br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
 