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
        $nota1 = $_GET["nota1"];
        $nota2 = $_GET["nota2"];
        $media = ($nota1 + $nota2)/2;
        echo "A média entre $nota1 e $nota2 é igual a $media.<br>";
        if ($media >= 7) {
            $situacao = "APROVADO";
        }
        elseif ($media < 7 && $media >= 5) {
            $situacao = "RECUPERAÇÃO";
        }
        else {
            $situacao = "REPROVADO";
        }
        echo "Situação do aluno: $situacao.";
    ?>
        <a href="03-exercicio.html">Voltar</a>
</div>
</body>
</html>
 