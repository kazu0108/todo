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
<div class="well" style="margin-top: 50px;">
<h1 class="text-center">To Do List</h1>
	<div class="row">
		<form method="post" class="form-horizontal" name="todo">
			<table class="table table-bordered">
				<thead>
					<th></th>
					<th class="text-center">Category Name</th>
					<th class="text-center">Description</th>
				</thead>
<?php 

$sql = "SELECT * FROM tbl_category";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()){

?>
				<tr>
					<th><input type="checkbox" name="check" value="<?php echo $row['id'];?> "></th>
					<th class="text-center"><?php echo $row['cat_name']; ?></th>
					<th class="text-center"><?php echo $row['cat_description']; ?></th>
				</tr>
				<?php 

        }
      }
      ?>
			</table>
			<a href="addtodo.php" class="btn btn-info btn-lg">Add</a>
			<a onClick="" class="btn btn-warning btn-lg">View</a>
			<a onClick="" class="btn btn-warning btn-lg">Edit</a>
			<a onClick="delete_todo();" class="btn btn-danger btn-lg">Delete</a>



		</form>
	</div>
</div>
</div>

</body>
</html>