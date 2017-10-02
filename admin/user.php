<?php
require_once ("header.php");

?> 

<!DOCTYPE html>
<html>
<head>
	<title>Todo App</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="buttons.js"></script>
</head>
<body>
<div class="container">
	<div class="row" style="margin-top: 50px;">
	<h1 class="text-center">User Imformation</h1>
		<form method="post" action="index.php">
			<table class="table table-bordered">
				<thead>
					<th></th>
					<th class="text-center">Username</th>
					<th class="text-center">First Name</th>
					<th class="text-center">Last Name</th>
					<th class="text-center">Email</th>
					<th class="text-center">Birthday</th>
				</thead>
<?php 


$sql = "SELECT * FROM tbl_users as u INNER JOIN tbl_profile as p ON u.user_id = p.user_id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()){

?>
				<tbody>
					<th><input type="checkbox" value="<?php echo $row['user_id'];?> " name="check"></th>
					<th class="text-center"><?php echo $row['username']; ?></th>
					<th class="text-center"><?php echo $row['firstname']; ?></th>
					<th class="text-center"><?php echo $row['lastname']; ?></th>
					<th class="text-center"><?php echo $row['email']; ?></th>
					<th class="text-center"><?php echo $row['birthday']; ?></th>
				</tbody>
			
			<?php 

        }
      }
      ?>
      </table>
			<a href="adduser.php" class="btn btn-info btn-lg">Add</a>
			<a onClick="" class="btn btn-warning btn-lg">View</a>
			<a onClick="edit_todo();" class="btn btn-warning btn-lg">Edit</a>
			<a onClick="" class="btn btn-danger btn-lg">Delete</a>
		</form>
	</div>
</div>

</body>
</html>
