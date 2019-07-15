<?php

include_once("conexao.php");



$nome=       filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$matricula=  filter_input(INPUT_POST, 'matricula', FILTER_SANITIZE_STRING);
$email=      filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$endereco=   filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$cidade=     filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$estado=     filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
$cep=        filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
$declaracao= filter_input(INPUT_POST, 'decalracao', FILTER_SANITIZE_STRING);

/*$nome=     $_POST['nome'];
$matricula=  $_POST['matricula'];
$email=      $_POST['email'];
$endereco=   $_POST['endereco'];
$cidade=     $_POST['cidade'];
$estado=     $_POST['estado'];
$cep=        $_POST['cep'];
$declaracao= $_POST['declaracao'];*/






$result = "INSERT INTO usuarios ((nome, matricula, email, endereco, cidade, estatdo, cep, declaracao) VALUES ('$nome', '$matricula', '$email', '$endereco', '$cidade', '$estado', '$cep', '$declaracao'))";
$resultado = mysqli_query($pdo, $result);

if(mysqli_insert_id($conn)){
	
	header("Location: sucesso.html");
}else{
	header("Location: index.html");
	
	
}




?>