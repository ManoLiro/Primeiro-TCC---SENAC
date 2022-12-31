<?php
$usuario = 'root';
$senha = '';
$database = 'senatec';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error){
	die("Falha ao conectar a DB" . $mysqli->error);
}

?>