<html>
<body>
<?php
	include 'config.php';
	$conn = new mysqli($servername, $username, $password);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	// Delete DB
	$sql = "DROP DATABASE IF EXISTS " .$dbname;
	$conn->query($sql);
	// New database
	$sql = "CREATE DATABASE " . $dbname;
	if ($conn->query($sql) === TRUE) {
		echo "Database " , $dbname , " created. <br>";
	} else {
		echo "Error creating database: " . $conn->error;
	}
	$conn->close();
	include 'connect.php';
	// New table
	$sql = "CREATE TABLE " . $tbname . " (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	title VARCHAR(8000) NOT NULL,
	description VARCHAR(8000) NOT NULL
	)";
	if ($conn->query($sql) === TRUE) {
		echo "Table " , $tbname , " created. <br>";
	} else {
		echo "Error creating table: " . $conn->error;
	}
	$conn->close();
?>
<br><a href="index.html">Back</a>
</html>
</body>