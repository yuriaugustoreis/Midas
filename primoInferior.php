<html>
<head>
    <title>Recebendo dados do Formulário</title>
</head>
    <body>
    <form method="post" action="primoInferior.php">
        Digite um Número:<br />
    <input type="text" name="numero" />
    <input type="submit" value="Enviar" />
    </form>
</body>
</html>

<?php

//definição da função
function PrimoInferior(){

$recebeNumero = $_POST["numero"];
//Não executa se for um número negativo por exemplo.
if ($recebeNumero < 0) {
    echo "Insira outro valor";
}
//GMP_PROB verifica automaticamente se é um numero primo ou não
if (gmp_prob_prime($recebeNumero) == 0){
    echo $recebeNumero. " Não é primo, ";
//GMP_NEXT mostra qual o próximo número primo do valor inserido
//Para o GMP funcionar no servidor --> Abra php.ini em seu aplicativo de servidor
//procure as palavras: extension = php_gmp.dll (há um sinal ; na frente dele, retire!)
//Caso não tenha o extension = php_gmp.dll somente adicionar e reiniciar o Apache.
    $GMP = gmp_nextprime($recebeNumero);
    echo "Porém ".$GMP. " é um número primo";
} else {
    echo $recebeNumero. " Esse número é primo";
}
}

//chamada à fução
    $anoSec = PrimoInferior();
    echo $anoSec;

?>
