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
        echo "<h2>Mostrando a Tabuada de $num</h2>";
        $cont = 1;
        do {
            $res = $num * $cont;
            echo "$num x $cont = $res<br>";
            $cont++;
        } while ($cont <= 10);
    ?>
    <br><a href="03-tabuada.html" class="botao">Voltar</a>
</div>
</body>
</html>
 