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
	
	$nama_barang = $_POST["nama_barang"];
	$nama_user = $_POST["nama_user"];
	$n_pakai = $_POST["n_pakai"];
	
	$sql = "SELECT nama_barang, nama_user, n_pakai FROM t_pemakaian ORDER BY nama_user DESC";
	
	if ($conn->query($sql) === TRUE ){
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
	
	header("Location: answer.php?id=$currentq");
?>