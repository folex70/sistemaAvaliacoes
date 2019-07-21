<!doctype html>
<html>
  <head>
		<title>Administração</title>
		<!-- Bootstrap core CSS -->
		<link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link href="./css/bootstrap.min.css" rel="stylesheet">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
		<script src="./js/bootstrap.min.js"></script>
		<!-- Custom styles for this template -->
		<link rel="stylesheet" href="./css/style.css" />	
		<script src="./js/script.js"></script>
  </head>
  <body>
  
    <header>
	  <div class="collapse bg-dark" id="navbarHeader">
		<div class="container">
		  <div class="row">
			<div class="col-sm-8 col-md-7 py-4">
			  <h4 class="text-white">Teste</h4>
			  <p class="text-muted">Teste.</p>
			</div>
		  </div>
		</div>
	  </div>
	  <div class="navbar navbar-dark bg-dark shadow-sm">
		<div class="container d-flex justify-content-between">
		  <a href="#" class="navbar-brand d-flex align-items-center">
			
			<strong>Sistema em desenvolvimento</strong>
		  </a>
		 
		</div>
	  </div>
	</header>	

	<section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading" >DashBoard	  </h1>
       <p class="lead text-muted">Aqui tem uma descrição desse produto.</p>
	    <h1 class="jumbotron-heading" >Configurações	  </h1>
       <p class="lead text-muted">Aqui tem uma descrição desse produto.</p>
       <p class="lead text-muted">Aqui tem uma descrição desse produto.</p>
       <p class="lead text-muted">Aqui tem uma descrição desse produto.</p>
	    <h1 class="jumbotron-heading" >Filtrar Comentários	  </h1>
       <p class="lead text-muted">Aqui tem uma descrição desse produto.</p>
      <p>
        <!-- <a href="#" class="btn btn-secondary my-2">Secondary action</a>-->
      </p>
    </div>

	</section>

  </section>

  </section>		

	<footer class="text-muted">
	  <div class="container">
		<p class="float-right">
		  <a href="#">Voltar ao Topo</a>
		</p>
		<p>Revolution. 2019.</p>

	  </div>
	</footer>

</html>

<?php 
	var_dump($_POST);
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "teste_db";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	//--------insert-------
	$sql = "SELECT * FROM avaliacoes";
	$result = $conn->query($sql) or die($conn->connect_error);
	var_dump($result);
	//--------------------
	$conn->close();	
	
/* SQL

-- create database teste_db;

use teste_db;

create table avaliacoes (
id_avaliacao int NOT NULL PRIMARY KEY,
nota int,
fale_mais varchar(255),
nome varchar(255),
ult_nome varchar(255),
email varchar(255),
avaliacao_status int
);

 insert into avaliacoes values (6, 5, 'produto muito bom. recomendo', 'tester', 'testerson', 'tester@teste.com',1);   
 insert into avaliacoes values (2, 4, 'produto muito bom demais mesmo. recomendo', 'teste2r', 'testerson', 'tester@teste.com',1);   
 insert into avaliacoes values (3, 2, 'produto não muito recomendavel', 'tester3', 'testerson', 'tester@teste.com',1);   
 insert into avaliacoes values (4, 4, 'gostei', 'tester4', 'testerson', 'tester@teste.com',1);   
 insert into avaliacoes values (5,2 , 'comprem mas não esperem muito', 'tester5', 'testerson', 'tester@teste.com',1);   
*/
?>

