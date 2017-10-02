<?php

require_once ("connection.php");

$id = $_POST['check'];

$sql = "DELETE FROM tbl_category WHERE user_id = '$id'";

if ($conn->query($sql) === TRUE) {
	header("location: index.php");
}else{
	echo "Error". $sql . "<br>" . $conn->error;
}


?>