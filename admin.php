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
			
			<strong><a href="./index.php" >Ir para sistema</a></strong>
		  </a>
		  <a href="#" class="navbar-brand d-flex align-items-center">
			<strong>Dashboard</strong>
		  </a>
		</div>
	  </div>
	</header>	
	
	<main role="main">
		<section class="jumbotron text-center">
		<div class="container">
				<h1 class="jumbotron-heading" >Resumo  </h1>
				 <?php 
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
					//--------obter quantidade de avaliacoes-------
					$sql = "SELECT count(nota) FROM avaliacoes";
					$result = $conn->query($sql);
					while($row = $result->fetch_assoc()) {
						$qtd = $row['count(nota)'];
					}
					//--------obter media de avaliacoes-------
					$sql = "SELECT avg(nota) FROM avaliacoes";
					$result = $conn->query($sql);
					while($row = $result->fetch_assoc()) {
						$avg = $row['avg(nota)'];
					}
					echo '<p class="lead text-muted">Você recebeu '.$qtd.'  avaliações. A média das avaliações é:<h2>'.$avg.'</h2></p>';
					$conn->close();
				?>			   
			   <br /><br /><br /><br />
			   <h1 class="jumbotron-heading" >Configurações	  </h1>
			   <p class="lead text-muted">Deseja que as avaliacoes sejam auto publicadas?</p>
			   <!-- 	   -->	   
			   <form method="post">
				  <div class="form-group"  >
					<label for="exampleFormControlSelect1">Escolha</label>
					<select name='moderacao' class="form-control" id="moderacao">
					  <option value=""></option>
					  <option value="1">Sim. Liberar automaticamente.</option>
					  <option value="2">Não. Aguardar moderação.</option>
					</select>
				  </div>
				 <!-- <input type="submit" value="Salvar" class="btn btn-secondary my-2" onclick="config"> 	--> 
				</form>
				<br /><br /><br /><br /><br /><br /><br /><br />
				<!-- 	   -->   	   
				<h1 class="jumbotron-heading" >Filtrar Comentários	  </h1>
				<!-- -->
				 <?php 
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

					
					//--------montagem do grid com lista-------
					$sql = "SELECT * FROM avaliacoes";
					$result = $conn->query($sql);
					echo '<div class="table-responsive">';
					echo '<table class = "w3-table-all notranslate">';
					echo'<tbody><tr><th>Nota</th><th>Status</th><th>Nome</th><th>Sobrenome</th><th>Comentário</th><th>Email</th><th>Data</th><th>imagem</th><th>Excluir</th><th>Liberar</th><th>Ocultar</th></tr>';
					if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
							echo '<tr>
									  <td>
										  '.$row["nota"].'
									  </td>
									  <td>
										  '.$row["avaliacao_status"].'
									  </td>
									  <td>
										  '.$row["nome"].'
									  </td>
									  <td>
										  '.$row["ult_nome"].'
									  </td>
									  <td>
										  '.$row["fale_mais"].'
									  </td>
									  <td>
										  '.$row["email"].'
									  </td>
									  <td>
										  '.$row["data_cadastro"].'
									  </td>
									  <td>
										  '.$row["nome_imagem"].'
									  </td>
									  <td>
									  <a href="#" onclick="deletar('.$row["id_avaliacao"].');">excluir</a>
									  </td>
									  <td>
									  <a href="#" onclick="liberar('.$row["id_avaliacao"].');">Liberar</a>
									  </td>
									  <td>
									  <a href="#" onclick="ocultar('.$row["id_avaliacao"].');">Ocultar</a>
									  </td>
								</tr>';
						}
					} 
					echo '</tbody></table></div>';
					//--------------------

					$conn->close();
				?>
				<!-- 	   -->   	   
			  <p>
				<!-- <a href="#" class="btn btn-secondary my-2">Secondary action</a>-->
			  </p>
		</div>
	</main>
	</section>
	<footer class="text-muted">
	  <div class="container">
		<p class="float-right">
		  <a href="#">Voltar ao Topo</a>
		</p>
		<p>Revolution. 2019.</p>
	  </div>
	</footer>
	
	</body>
</html>


