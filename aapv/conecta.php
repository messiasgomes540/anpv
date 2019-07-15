<?php

$ervidor="localhost";
$usuario="root";
$senha="";
$banco="aapvcad";
	
	$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
	mysqli_select_db( $conexao, $banco) or die(mysql_error());
	mysqli_set_charset($conexao,'UTF8');
	header('Content-Type: text/html; charset=utf-8');
	
	if (!$conexao){
		
		echo 'Conexão falhou' . mysqli_connect_error();
	}else{
		echo 'Conexão realizada com sucesso!';
	}
		mysqli_close($conexao);


?>