<?php
include "config.php";
include('protecao.php');

$cod_cliente = $_POST['cod_cliente'];
$nome_completo = $_POST['nome_completo'];
$endereco = $_POST['endereco'];
$CPF = $_POST['CPF'];
$telefone = $_POST['telefone'];


$sql = "UPDATE clientes SET Nome='$nome_completo',CPF='$CPF',Endereço='$endereco',Telefone='$telefone' WHERE cod_cliente = $cod_cliente";

$query = $mysqli->query($sql);

if($query){

	header("location: alerta_editar.php");

}else{

	header("location: alerta_editar_falhou.php");
}


?>
