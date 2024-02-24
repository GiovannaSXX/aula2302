<?php
$nome = "Patotinhas";
$idade = 30;
$lista  = ['tamiris', 'giovanna', 'bianca', 'ana julia'];
$idade2 = 40;

echo $nome . '<br>';
echo $idade . '<br>';
echo $lista;
echo'\n';
var_dump($nome);
echo'\n';
var_dump($idade);
echo'\n';
var_dump($lista);
echo'\n';
 
if($idade === $idade2){
    echo "sim";

}else {
    echo '<br> Dentro do else';
        var_dump($idade);
        echo '<br>';
        var_dump($idade2);
}