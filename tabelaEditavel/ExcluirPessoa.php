<?php
include "Conexao.php";

if(isset($_POST["codpessoa"]) && $_POST["codpessoa"] != NULL && $_POST["codpessoa"] != ""){
    $result = $link->prepare("delete from pessoa where codpessoa = {$_POST["codpessoa"]}");
}else{
    die(die(json_encode(array('mensagem' => 'Erro ao excluir não houve passagem de código!', 'situacao' => false))));
}

$resSalvar = $result->execute();

if($resSalvar != FALSE){
    die(die(json_encode(array('mensagem' => 'Pessoa excluida com sucesso!', 'situacao' => true))));
}else{
    die(die(json_encode(array('mensagem' => 'Erro ao salvar causado por: '. getMessage(), 'situacao' => false))));
}
?>