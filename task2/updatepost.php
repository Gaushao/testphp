<html>
<body>
<?php
include 'config.php';
include 'connect.php';

$postid = $_POST["postid"];
$title = $_POST["title"];
$description = $_POST["description"];

$sql = "UPDATE " . $tbname . " SET title='" . $title . "' , description='" . $description . "' WHERE id=" . $postid;

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

?>
<br><a href="index.html">Back</a>
</html>
</body>