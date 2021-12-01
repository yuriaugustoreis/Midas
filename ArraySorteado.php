<?php

//Criando um Array
$array = array(1,2,3,4,5,6,7,8,9,10,10,9,8,7,6,5,4,3,2,1);
//Sorteando (Embaralhando) os valores.
shuffle($array);

//Exibindo array
print_r($array);

echo "<br><br>";
//Consultando quais os valores que estão sendo repetidos.
print_r(array_count_values($array));




?>