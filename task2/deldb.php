<html>
<body>
<?php
include 'config.php';
include 'connect.php';
$sql = 'DROP DATABASE ' . $dbname;
if(! $conn->query( $sql ) ) {
  die('Could not delete database forumDB: ' . mysql_error());
}
echo "Database deleted. <br>";
?>