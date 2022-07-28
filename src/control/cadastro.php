<?php

require_once "../dao/AgendaDao.php";

$agen = new AgendaDao();

/*
    Sem setter fluído !
$agen->setNome($_POST['nomePessoa']);
$agen->setCelular($_POST["celularPessoa"]); */

if (isset($_GET["delete"])){
    $agen->delete($_GET["delete"]);
    echo "Apagado com sucesso" . "<br>";
    echo "<a href='../view'>Voltar</a>";
    exit;
}

$agen->setNome($_POST['nomePessoa'])
     ->setCelular($_POST["celularPessoa"])
     ->setFone($_POST["telefonePessoa"])
     ->setCpf($_POST["cpfPessoa"])
     ->setId($_POST["id"]);
;


if ($agen->getId() == 0 ){
    $agen->insert();
    echo "Inserido com sucesso" . "<br>";
    echo "<a href='../view'>Voltar</a>";    
}else {
    $agen->update();
    echo "Editado com sucesso" . "<br>";
    echo "<a href='../view'>Voltar</a>";
}







