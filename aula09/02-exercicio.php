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
        if($idade < 16){
            $vota = "não pode votar";
            $dirige = "não pode dirigir";
        }
        elseif (($idade >= 16 && $idade < 18) || ($idade > 65)) {
            $tipoVoto = "o voto é opcional";
        }
        else {
            $tipoVoto = "o voto é obrigatório";
            }
        echo "Para essa idade, $tipoVoto.";
    ?>
        <a href="02-exercicio.html">Voltar</a>
</div>
</body>
</html>
 