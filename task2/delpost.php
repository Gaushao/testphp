<html>
<body>
<?php
include 'config.php';
include 'connect.php';

/*
$postid = $_POST[postid];
$sql = "DELETE FROM " . $tbname . "
WHERE id='".$postid"'";
*/
$postid = $_POST["postid"];
$sql = "DELETE FROM " . $tbname . " WHERE id=".$postid;

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

?>
<br><a href="index.html">Back</a>
</html>
</body>