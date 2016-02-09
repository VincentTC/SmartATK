<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "smartatk";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	
	$nama_user = $_POST["nama_user"];
	$kategori_user = $_POST["kategori_user"];
	
	$sql = "SELECT nama_user, kategori_user FROM t_user";
	
	if ($conn->query($sql) === TRUE ){
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
	
	header("Location: answer.php?id=$currentq");
?>