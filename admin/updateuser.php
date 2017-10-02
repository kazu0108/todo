<?php 
require_once ("connection.php");

$username = $_POST['username'];
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$email = $_POST['email'];
$birthday = $_POST['birthday'];
$password = $_POST['password'];

$sql = "UPDATE tbl_users SET username = '$username', password = '$password' WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {

	$sql = "SELECT * FROM tbl_users WHERE username = '$username'";
	$result = $conn->query($sql);
	$row = $result->fetch_array();

	$userid = $row['user_id'];

$sql = "UPDATE tbl_profileSET SET userid = '$userid', firstname = '$firstname', lastname = '$lastname', email = '$email', birthday = '$birthday' WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
	


	header("location: user.php");}
}
else{
	echo "Error" . $sql . "<br>" . $conn->error;
}

$conn->close();

?>