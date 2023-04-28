<?php
include 'funcoes.php';
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if ($usuario == 'admin' && $senha == 'admin'){
cabecalho();
menu();
rodape();
conteudo();

    //mostra tela de logado
}else{
      cabecalho();
      echo "<br>Usuario inválido"
      principal();
      rodape();
// layout('cabecalho');

    //mostra outra tela para fazer login novamente
}
?>