<?php
require_once ("connection.php");

$categoryname = $_POST['categoryname'];
$description = $_POST['description'];

$sql = "INSERT INTO tbl_category(`cat_name`, `cat_description`) VALUES('$categoryname', '$description')";

if ($conn->query($sql) === TRUE) {
	header("location: index.php");}
else{
	echo "Error" . $sql . "<br>" . $conn->error;
}

$conn->close();

?>