<html>
<body>
<?php
include 'config.php';
include 'connect.php';

$title = $_POST["title"];
$description = $_POST["description"];
$sql = "INSERT INTO " . $tbname . " (title, description)
VALUES ('".$title."' , '".$description."')";

if ($conn->query($sql) === TRUE) {
	$last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
<br><a href="index.html">Back</a>
</html>
</body>