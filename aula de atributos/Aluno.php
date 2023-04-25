<?php
class Aluno{

    public $nome;
    public $email;
    public $cpf;
    public $responsavel;
    public $matriculado;
    public $curso;

    public function perguntar($texto){
        echo "O aluno perguntou: <br>" .$texto."<hr>";
    }

    public function fazerMatricula($text){

    }
}

?>