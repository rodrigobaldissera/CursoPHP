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
        $ano = isset($_GET["ano"])?$_GET["ano"]:1900;
        $idade = date("Y") - $ano;
        echo "Você nasceu em $ano e tem $idade anos.<br>";
        if($idade < 18){
            $vota = "já pode votar";
            $dirige = "já porde dirigir";
        }
        else{
            $vota = "não pode votar";
            $dirige = "não pode dirigir";
        }
        echo "Com essa idade você $vota e $dirige.";
    ?>
        <a href="01-exercicio.html">Voltar</a>
</div>
</body>
</html>
 