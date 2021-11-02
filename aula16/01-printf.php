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
      $p = "leite";
      $pr = 4.5;
      //echo "O $p custa R$ " . number_format($pr,2);
      printf ("O %s custa R$ %.2f " , $p, $pr);
    ?>
</div>
</body>
</html>
 