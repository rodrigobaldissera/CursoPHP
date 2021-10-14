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
        $estado = $_GET["estado"];
        switch ($estado) {
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
            case 7:
                echo "Você mora na <span class='foco'>Região Norte</span>.";
                break;
            case 8:
            case 9:
            case 10:
            case 11:
            case 12:
            case 13:
            case 14:
            case 15:
            case 16:
                echo "Você mora na <span class='foco'>Região Nordeste</span>.";
                break;
            case 17:
            case 18:
            case 19:
            case 27:
                echo "Você mora na <span class='foco'>Região Centro-Oeste</span>.";
                break;
            case 20:
            case 21:
            case 22:
            case 23:
                echo "Você mora na <span class='foco'>Região Sudeste</span>.";
                break;
            case 24:
            case 25:
            case 26:
                echo "Você mora na <span class='foco'>Região Sul</span>.";
        }
    ?>
    <br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
 