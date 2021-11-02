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
        $t = "Aqui temos um texto gigante creiado pelo PHP que vai mostrar o funcionamento da funcao wordwrap..";
        $r = wordwrap($t, 5, "<br>\n", true);
        echo $r;
    ?>
</div>
</body>
</html>
 