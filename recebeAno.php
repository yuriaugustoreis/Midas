<html>
<head>
    <title>Recebendo dados do Formulário</title>
</head>
    <body>
    <form method="post" action="teste.php">
        Digite o Ano:<br />
    <input type="text" name="ano" />
    <input type="submit" value="Enviar" />
    </form>
</body>
</html>

<?php

//definição da função
function SeculoAno(){

    $recebeAno = $_POST["ano"];

    switch ($recebeAno) {
        case ($recebeAno === 0):
            echo "Insira um valor";
            break;

        case ($recebeAno > 1 && $recebeAno <= 100):
            echo "Século I (Um)";
            break;

        case ($recebeAno >= 101 && $recebeAno <= 200):
            echo "Século II (Dois)";
            break;
        
        case ($recebeAno >= 201 && $recebeAno <= 300):
            echo "Século III (Três)";
            break;
        
        case ($recebeAno >= 301 && $recebeAno <= 400):
            echo "Século IV (Quatro)";
            break;

        case ($recebeAno >= 401 && $recebeAno <= 500):
            echo "Século V (Cinco)";
            break;

        case ($recebeAno >= 501 && $recebeAno <= 600):
            echo "Século VI (Seis)";
            break;

        case ($recebeAno >= 601 && $recebeAno <= 700):
            echo "Século VII (Sete)";
            break;

        case ($recebeAno >= 701 && $recebeAno <= 800):
            echo "Século VIII (Oito)";
            break;

        case ($recebeAno >= 801 && $recebeAno <= 900):
            echo "Século IX (Nove)";
            break;

        case ($recebeAno >= 901 && $recebeAno <= 1000):
            echo "Século X (Dez)";
            break;

        case ($recebeAno >= 1001 && $recebeAno <= 1100):
            echo "Século XI (Onze)";
            break;

        case ($recebeAno >= 1101 && $recebeAno <= 1200):
            echo "Século XII (Doze)";
            break;

        case ($recebeAno >= 1201 && $recebeAno <= 1300):
            echo "Século XIII (Treze)";
            break;

        case ($recebeAno >= 1301 && $recebeAno <= 1400):
            echo "Século XIV (Quatorze)";
            break;

        case ($recebeAno >= 1401 && $recebeAno <= 1500):
            echo "Século XV (Quinze)";
            break;

        case ($recebeAno >= 1501 && $recebeAno <= 1600):
            echo "Século XVI (Dezesseis)";
            break;

        case ($recebeAno >= 1601 && $recebeAno <= 1700):
            echo "Século XVII (Dezessete)";
            break;

        case ($recebeAno >= 1701 && $recebeAno <= 1800):
            echo "Século XVIII (Dezoito)";
            break;

        case ($recebeAno >= 1801 && $recebeAno <= 1900):
            echo "Século XIX (Dezenove)";
            break;

        case ($recebeAno >= 1901 && $recebeAno <= 2000):
            echo "Século XX (Vinte)";
            break;

        case ($recebeAno >= 2001 && $recebeAno <= 2100):
            echo "Século XXI (Vinte e Um)";
            break;
        
        default:
            echo "Insira outro ano, por favor.";
            break;
    }
}

//chamada à fução
    $anoSec = SeculoAno();
    echo $anoSec;

?>
