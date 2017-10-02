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
</head>
<body>
<div class="container">
	<div class="row" style="margin-top: 50px;">
	<h1 class="text-center">User Imformation</h1>
		<div class="well col-md-offset-3 col-md-6">
		<form method="post" action="addusersql.php" class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-md-2" for="categoryname">Category Name:</label>
				<div class="col-md-10">
				<input type="text" name="categoryname" id="categoryname" class="form-control" placeholder="Enter Category Name"></div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2" for="description">Description:</label>
				<div class="col-md-10">
				<input type="text" name="description" id="description" class="form-control" placeholder="Enter Description"></div>
			</div>
			
				
		
			<button type="submit" name="add" class="btn btn-info btn-lg">Add</button>
			<a href="index.php" class="btn btn-danger btn-lg">Cancel</a>
			</div>
			</form>
	</div>

</div>

</body>
</html>
