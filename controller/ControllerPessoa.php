<?php
require_once("../model/pessoa.class.php")

$pessoa = new pessoa();
$pessoa->setNome($_POST['TXTnOME']);
echo $pessoa->getNome();

?>