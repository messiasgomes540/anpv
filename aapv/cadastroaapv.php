<?php
header("Content-Type: text/html; charset=UTF-8",true);

?>



<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">	
		<link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
	<!-- versão de desenvolvimento, inclui aviso úteis no console  -->	
	
	 <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons' rel="stylesheet">
	
	 
	 
    <title>ANAPV</title>
  </head>
  <body>
    <div class="container-fluid ">
	<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
	<nav class="nav flex-column">
  <a class="nav-link active" href="index.html">HOME</a>
  <a class="nav-link" href="cadastroaapv.php">CADASTRE-SE</a>
  <a class="nav-link" href="informes.html">INFORMAÇÕES</a>
  <a class="nav-link" href="galeria.html">GALERIA</a>
</nav>
      <h5 class="text-white h4">ASSOCIAÇÃO NORTE RIOGRANDENSE DOS AGENTES PATRIMONIAIS E VIGIAS </h5>
      <span class="text-muted">É TEMPO DE TRABALHO.</span>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-primary">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
	
			<ul class="nav nav-pills nav-fill">
					<li class="nav-item">
						<a class="nav-link active" href="index.html">HOME</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="informes.html">INFORMAÇÕES</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="galeria.html">GALERIA</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="cadastroaapv.php">CADASTRE-SE</a>
					</li>	
				</ul>
				
	
			</nav>
  </nav>
  <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Cadastro</li>
  </ol>
</nav>
</div>

</div>
<div class="container-fluid">
	<form  name="formCad" action="envie.php" method="post" >
		<form>
  <div class="form-row">
	<div class="form-group col-md-4">
      <label for="inputEmail4">Nome</label>
      <input type="text" class="form-control" id="inputtext" placeholder="Nome Completo" name="nome" required>
    </div>
	<div class="form-group col-md-4">
      <label for="inputEmail1">
Matrícula</label>
      <input type="text" class="form-control" id="inputtext" placeholder="Matricula" name="matricula" required>
    </div>
    <div class="form-group col-md-4">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="fulano@gmail.com" name="email" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Endereço</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Rua , nº 0" name="endereco" required>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Cidade</label>
	  <select id="inputCity" class="form-control" name= "cidade">
        <option selected>Escolher...</option>
		  <option>Natal</option>
        <option>Acari</option>
		<option>Açu</option>
		<option>Afonso Bezerra</option>
		<option>Água Nova</option>
		<option>Alexandria</option>
		<option>Almino Afonso</option>
		<option>Alto do Rodrigues</option>
		<option>Angicos</option>
		<option>Antônio Martins</option>
		<option>Apodi</option>
		<option>Areia Branca</option>
		<option>Arês</option>
		<option>Augusto Severo</option>
		<option>Baía Formosa</option>
		<option>Baraúna</option>
		<option>Barcelona</option>
		<option>Bento Fernandes</option>
		<option>Bodó</option>
		<option>Bom Jesus</option>
		<option>Brejinho</option>
		<option>Caiçara do Norte</option>
		<option>Caiçara do Rio do Vento</option>
		<option>Caicó</option>
		<option>Campo Redondo</option>
		<option>Canguaretama </option>
		<option>Caraúbas </option>
		<option>Carnaúba dos Dantas</option>
		<option>Carnaubais</option>
		<option>Ceará-Mirim </option>
		<option>Cerro Corá</option>
		<option>Coronel Ezequiel</option>
		<option>Coronel João Pessoa</option>
		<option>Cruzeta</option>
		<option>Currais Novos</option>
		<option>Doutor Severiano</option>
		<option>Encanto</option>
		<option>Equador</option>
		<option>Espríto Santo</option>
		<option>Extremoz</option>
		<option>Felipe Guerra</option>
		<option>Fernando Pedroza</option>
		<option>Francisco Dantas</option>
		<option>Frutuoso Gomes </option>
		<option>Galinhos</option>
		<option>Goianinha</option>
		<option>Governador Dix-Sept Rosado</option>
		<option>Grossos</option>
		<option>Guamaré</option>
		<option>Ielmo Marinho </option>
		<option>Ipanguaçu</option>
		<option>Ipueira</option>
		<option>Itajá</option>
		<option>Itaú</option>
		<option>Jaçanã</option>
		<option>Jandaíra</option>
		<option>Janduís</option>
		<option>Januário Cicco</option>
		<option>Japi</option>
		<option>Jardim de Angicos</option>
		<option>Jardim de Piranhas</option>
		<option>Jardim do Seridó</option>
		<option>João Câmara</option>
		<option>João Dias</option>
		<option>José da Penha</option>
		<option>Jucurutu </option>
		<option>Lagoa dAnta</option>
		<option>Lagoa de Pedras</option>
		<option>Lagoa de Velhos</option>
		<option>Lagoa Nova</option>
		<option>Lagoa Salgada</option>
		<option>Lajes</option>
		<option>Lajes Pintadas</option>
		<option>Lucrécia</option>
		<option>Luís Gomes</option>
		<option>Macaíba</option>
		<option>Macau</option>
		<option>Major Sales</option>
		<option>Marcelino Vieira</option>
		<option>Martins</option>
		<option>Maxaranguape</option>
		<option>Messias Targino</option>
		<option>Montanhas</option>
		<option>Monte Alegre</option>
		<option>Monte das Gameleiras</option>
		<option>Mossoró</option>
		<option>Natal</option>
		<option>Nísia Floresta</option>
		<option>Nova Cruz</option>
		<option>Olho-dÁgua do Borges</option>
		<option>Ouro Branco </option>
		<option>Paraná</option>
		<option>Paraú</option>
		<option>Parazinho</option>
		<option>Parelhas</option>
		<option>Parnamirim</option>
		<option>Passa e Fica</option>
		<option>Passagem</option>
		<option>Patu</option>
		<option>Pau dos Ferros</option>
		<option>Pedra Grande</option>
		<option>Pedra Preta</option>
		<option>Pedro Avelino</option>
		<option>Pedro Velho</option>
		<option>Pendências </option>
		<option>Pilões</option>
		<option>Poço Branco</option>
		<option>Portalegre</option>
		<option>Porto do Mangue</option>
		<option>Presidente Juscelino</option>
		<option>Pureza</option>
		<option>Rafael Fernandes</option>
		<option>Rafael Godeiro</option>
		<option>Riacho da Cruz</option>
		<option>Riacho de Santana</option>
		<option>Riachuelo</option>
		<option>Rio do Fogo</option>
		<option>Rodolfo Fernandes</option>
		<option>Ruy Barbosa</option>
		<option>Santa Cruz</option>
		<option>Santa Maria </option>
		<option>Santana do Matos </option>
		<option>Santana do Seridó</option>
		<option>Santo Antônio</option>
		<option>São Bento do Norte</option>
		<option>São Bento do Trairí</option>
		<option>São Fernando</option>
		<option>São Francisco do Oeste</option>
		<option>São Gonçalo do Amarante</option>
		<option>São João do Sabugi</option>
		<option>São José de Mipibu</option>
		<option>São José do Campestre</option>
		<option>São José do Seridó</option>
		<option>São Miguel</option>
		<option>São Miguel do Gostoso</option>
		<option>São Paulo do Potengi</option>
		<option>São Pedro</option>
		<option>São Rafael</option>
		<option>São Tomé</option>
		<option>São Vicente</option>
		<option>Senador Elói de Souza</option>
		<option>Senador Georgino Avelino</option>
		<option>Serra de São Bento</option>
		<option>Serra do Mel</option>
		<option>Serra Negra do Norte</option>
		<option>Serrinha</option>
		<option>Serrinha dos Pintos</option>
		<option>Severiano Melo</option>
		<option>Sítio Novo</option>
		<option>Taboleiro Grande</option>
		<option>Taipu</option>
		<option>Tangará</option>
		<option>Tenente Ananias</option>
		<option>Tenente Laurentino Cruz</option>
		<option>Tibau</option>
		<option>Tibau do Sul</option>
		<option>Timbaúba dos Batistas</option>
		<option>Touros</option>
		<option>Triunfo Potiguar</option>
		<option>Umarizal</option>
		<option>Upanema</option>
		<option>Várzea</option>
		<option>Venha-Ver</option>
		<option>Vera Cruz</option>
		<option>Viçosa</option>
		<option>Vila Flor </option>
		<option>outros/PB </option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputEstado">Estado</label>
      <select id="inputEstado" class="form-control" name="estado">
        <option selected>Escolher...</option>
        <option>RN</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputCEP">CEP</label>
      <input type="text" class="form-control" id="inputCEP" name="cep">
    </div>
  </div>
 <div class="form-group col-md-4">
      <label for="inputDecalracao">Declaração</label>
      <select id="inputDeclaracao" class="form-control" name="declaracao">
        <option selected>Escolher...</option>
        <option>SIM, Declaro que estou me associando a ANAPV e autorizo o desconto em folha no Valor de 1,2% em cima de meu salário base em favor da  ANAPV mensalmente.  </option>
		<option>Não, Declaro que não  estou me associando a ANAPV e não autorizo o desconto em folha no falor de 1,2% em cima de meu salário base em favor da  ANAPV mensalmente.</option>
      </select>
    </div>
 <a href="sucesso.html"> <button type="submit" class="btn btn-primary"  onclick=msg();>Cadastrar</button></a>
</form>
		

	</form>
  

    
  </div>
</div>
<br>
<div class="container-fluid " >
	<div class="footer" >
		<nav class="navbar navbar-dark bg-dark p-4">
			<ul>
				<li><a href="https://www.facebook.com/anapv.agentes"><i class="fab fa-facebook"> Conecte-se a nossa página no Facebook</i></a></li>
				<li><a href="#"><i class="fab fa-twitter"> Siga-nós no Twitter</i></a></li>
				<li><a href="#"><i class="fab fa-instagram"> Siga-nós no Instagram</i></a></li>
			</ul>
			
			<h6 class="card-title" >Copyright © 2019 | Messias Gomes </h6>
		</nav>
	</div>	
  </div>
  
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
  </body>
</html>