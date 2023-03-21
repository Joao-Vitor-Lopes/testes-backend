<?php

function soma($n1, $n2){
    $resultado = $n1+$n2;
    echo "<br>".$total."<br>";
}

function subtracao($n1, $n2){
    $total = $n1+$n2;
    echo "<br>".$total."<br>";
}

function multiplicacao($n1,$n2){
    $total = $n1+$n2;
}
function divisao($n1,$n2){
    if($n2==0){
        echo "<br> Não se divide por 0!<br>";
}else{
    $total= $n1/$n2;
    echo "<br>".$total."<br>";
}

$num1 = $_POST['valor1'];
$num2 = $_POST['valor2'];
$operacao = $_POST['operacao1'];

if($operacao == "+"){
    soma($num1,$num2);

} else{
    if($operacao == "-"){
        subtracao($num1,$num2);

} else{
    if($operacao == "*"){
        multiplicacao($num1,$num2);

} else{
    if($operacao == "/"){
        divisao($num1,$num2);

} 
}
}
}
}

?>
<a href=