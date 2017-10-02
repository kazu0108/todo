			
			
<?php
require_once ("connection.php");

$username = $_POST['username'];
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$email = $_POST['email'];
$birthday = $_POST['birthday'];
$password = $_POST['password'];

$sql = "INSERT INTO tbl_users(`username`, `password`) VALUES('$username', '$passsword')";

if ($conn->query($sql) === TRUE) {

	$sql = "SELECT * FROM tbl_users WHERE username = '$username'";
	$result = $conn->query($sql);
	$row = $result->fetch_array();

	$userid = $row['user_id'];

$sql = "INSERT INTO tbl_profile(`user_id`, `firstname`, `lastname`, `email`, `birthday`) VALUES('$userid', '$firstname', '$lastname', '$email', '$birthday')";

if ($conn->query($sql) === TRUE) {
	


	header("location: user.php");}
}
else{
	echo "Error" . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

