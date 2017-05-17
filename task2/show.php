<html>
<body>
<?php
include 'config.php';
include 'connect.php';
$sql = $conn->query("SELECT id, title, description FROM " . $tbname);

if ($sql->num_rows > 0) {
	echo "<table><tr><th>ID</th><th>Title</th><th>Description</th></tr>";
	while($row = $sql->fetch_assoc()) {
		echo "<tr><td>".$row["id"]."</td><td>".$row["title"]."</td><td>".$row["description"]."</td></tr>";
	}
	echo "</table>";
} else {
	echo "0 results";
}

$conn->close();
?>
<br><a href="index.html">Back</a>
</html>
</body>