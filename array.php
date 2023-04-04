
<?php

$familia = array();
$familia["tios"]= array("Tio Patinhas","Pato Donald");
$familia["sobrinhos"][]= "Zezinho";
$familia["sobrinhos"][]= "Huguinho";
$familia["sobrinhos"][]= "Luizinho";
$familia["sobrinhos"][] = array("Zezinho","Huguinho","Luizinho");

echo "<br>O primeiro sobrinho" .$familia["sobrinhos"][0];

$valores=array(1,2,3,4,5,6,7,8,9);
$itens=array("arroz","carne","farofa","feijão","batata","frango");

for($i=0;$i<9;$i++){
     echo "Posição vetor:".$i."valor:".$valores[$i];
}
?>
<form action="lista.php" method="post">
<label><?php echo $itens[$i]>?>
<input type="text" name="produto"<?php echo $itens[$i] ?> id=""><br>

</form>

<?php
//$lista = array();
//$lista[0] = 1;
//$lista[1] = 23;
//$lista[2] = "Vetor AÉÉÉ";
//$lista[3] = "Vetor AÉÉ";

//$parentes[] = "Gru";
//$parentes[] = "Muié do Gru";


echo "<pres>";
var_dump($familia);
unset($familia["sobrinhos"][2]);
?>