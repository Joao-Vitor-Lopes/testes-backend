<?php
include "Aluno.php"

$em = new Aluno();
$et = new Aluno();
$etpi = new Aluno();

$em->nome = "Huguinho";
$em->curso = "Ensino Médio";

$et->nome = "Zezinho";
$et->curso = "Informática para Internet";

$etpi->nome = "Luizinho";
$etpi->curso = "Técnico Integram";

$etpi->perguntar("A cor do céu?");
$em->perguntar("Teve aula hoje?");
$et->perguntar("Que dia é hoje?");

if($em->matriculado==1){
    echo "Aluno matriculado";
}else{
    echo "Aluno não matriculado";
    $em->fazerMatricula();
}
}
?>