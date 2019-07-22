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
	
	if($_GET['function']  == 'delete'){
		$sql = "delete FROM avaliacoes where id_avaliacao =".$_GET['id'];
		$result = $conn->query($sql);
	}elseif ($_GET['function']  == 'liberar'){
		$sql = "update avaliacoes set avaliacao_status = 1 where id_avaliacao =".$_GET['id'];
		$result = $conn->query($sql);
	}elseif ($_GET['function']  == 'ocultar'){
		$sql = "update avaliacoes set avaliacao_status = 2 where id_avaliacao =".$_GET['id'];
		$result = $conn->query($sql);
	}
	elseif ($_GET['function']  == 'config'){
		$sql = "update config set status_config = ".$_GET['val'];
		$result = $conn->query($sql);
	}
	
	$conn->close();	
	
?>

