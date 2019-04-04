<?php
include "Conexao.php";

if(isset($_POST["codpessoa"]) && $_POST["codpessoa"] != NULL && $_POST["codpessoa"] != ""){
    $result = $link->prepare(
        "update pessoa set nome = '{$_POST["nome"]}', 
        dtnascimento = '{$_POST["dtnascimento"]}', email = '{$_POST["email"]}' 
        where codpessoa = {$_POST["codpessoa"]}"
    );
}else{
    $result = $link->prepare(
        "insert into pessoa (nome, email, dtnascimento) 
        values('{$_POST["nome"]}', '{$_POST["email"]}', '{$_POST["dtnascimento"]}');"
    );
}

$resSalvar = $result->execute();

if($resSalvar != FALSE){
    die(die(json_encode(array('mensagem' => 'Pessoa salva com sucesso!', 'situacao' => true))));
}else{
    die(die(json_encode(array('mensagem' => 'Erro ao salvar causado por: '. getMessage(), 'situacao' => false))));
}
?>