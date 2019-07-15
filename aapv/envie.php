<?php
header("Content-Type: text/html;charset=UTF-8",true);



?>

<!--
<!doctype html>
<html lang="pt-br">
  <head>-->
  <!-- Required meta tags -->
    <meta charset="utf-8">
   
    <!-- Bootstrap CSS -->
	 
	
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	
    

	
	
	<!-- versão de desenvolvimento, inclui aviso úteis no console  -->	
	
	<!-- <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons' rel="stylesheet">-->
	  
   <!-- <title>Cadastrando Agentes ...</title>
  </head>
  <body>
  <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
    <li class="breadcrumb-item"><a href="cadastroaapv.php">Cadastro</a></li>
    <li class="breadcrumb-item active" aria-current="page">Sucesso</li>
  </ol>
</nav>-->
<?php
include("conexao.php");

//$host="localhost";
//$user="4385";
//$pass="emgl452068";
//$banco="4385";
//$conexao= mysqli_connect($host, $user, $pass, $banco) or die(mysql_error());
//mysqli_select_db( $conexao, $banco) or die(mysql_error());
//mysqli_set_charset($conexao,'UTF8');
$host="localhost";
$user="root";
$pass="";
$banco="aapvcad";
$conexao= mysqli_connect($host, $user, $pass, $banco) or die(mysql_error());
mysqli_select_db( $conexao, $banco) or die(mysql_error());
mysqli_set_charset($conexao,'UTF8');
header('Content-Type: text/html; charset=utf-8');
$nome=       $_POST['nome'];
$matricula=  $_POST['matricula'];
$email=      $_POST['email'];
$endereco=   $_POST['endereco'];
$cidade=     $_POST['cidade'];
$estado=     $_POST['estado'];
$cep=        $_POST['cep'];
$declaracao= $_POST['declaracao'];
$sql=mysqli_query($conexao, "INSERT INTO usuarios(nome, matricula, email, endereco, cidade, estado, cep, declaracao)
VALUES('$nome' ,'$matricula', '$email', '$endereco', '$cidade', '$estado', '$cep', '$declaracao')");

mysqli_query($conexao, "SET NAMES 'utf8'");
mysqli_query($conexao, " SET charset_set_connection=utf8");
mysqli_query($conexao, " SET charset_set_client=utf8");
mysqli_query($conexao, " SET charset_set_results=utf8");

if (mysqli_insert_id($conexao)){
	
	header("Location: sucesso.html");
	
}else{
	header("Location: cadastroaapv.php");
	
}


//$mensagem = " O Agente  {$nome}  acabou de se cadastrar";
/*$corpo = "
	nome:"      .$_POST['nome']."
    matricula:" .$_POST['matricula']."
    email:"     .$_POST['email']."
    endereço:"  .$_POST['endereco']."
    cidade:"    .$_POST['cidade']."
    estado:"    .$_POST['estado']."
    cep:"       .$_POST['cep']."
    declaracao:".$_POST['declaracao']."

";*/

//mail('messiasgomes540@gmail.com', $mensagem, $corpo,'From:' .$email);




?>
<!--<div class="alert alert-success" role="alert">
  Cadastro realizado com sucesso! Parabéns vc agora é um associado ANAPV.
</div>-->
<!--
<div class="container-fluid"  style="max-width: 540px;">
<div class="card mb-3">
  <img src="img/sucesso1.jpg" class="card-img-top"  alt="...">
  <div class="card-body">
    <h5 class="card-title">SUCESSO!</h5>
    <p class="card-text">Cadastro realizado com sucesso!<br> Parabéns você agora é um associado ANAPV.</p>
    <p class="card-text"><small class="text-muted">Navegue pelo site e desfrute de um canal desenvolvido pensando em você.</small></p>
	<a class="btn btn-success" href="index.html" role="button">Voltar para página inicial</a>
  </div>
 </div> -->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
  

<!--</body>
</html>-->
