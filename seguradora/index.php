<?php

$conn = new mysqli("localhost", "root", "", "seguradora");

if($conn->connect_error){
	
	echo "Error: ". $conn->connect_error;
	
}

$stmt = $conn->prepare("INSERT INTO cliente (nome, logradouro, numero, bairro, cidade) VALUES(?, ?, ?, ?, ?)");

$stmt->bind_param("sssss", $nome, $rua, $numero, $bairro, $cidade);
var_dump($_POST['nome']);/*
$nome = $_POST['nome'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
*/
$stmt->execute();

?>