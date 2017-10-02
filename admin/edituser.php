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
		<form method="post" action="add.php" class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-md-2" for="username">Username:</label>
				<div class="col-md-10">
				<input type="text" name="username" id="username" class="form-control" placeholder="Enter Username"></div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2" for="fname">First Name:</label>
				<div class="col-md-10">
				<input type="text" name="fname" id="fname" class="form-control" placeholder="Enter First Name"></div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2" for="lname">Last Name:</label>
				<div class="col-md-10">
				<input type="text" name="lname" id="lname" class="form-control" placeholder="Enter Last Name"></div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2" for="email">Email:</label>
				<div class="col-md-10">
				<input type="email" name="email" id="email" class="form-control" placeholder="Enter Email"></div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2" for="birthday">Birthday:</label>
				<div class="col-md-10">
				<input type="date" name="birthday" id="birthday" class="form-control" placeholder="Enter Birthday"></div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2" for="password">password:</label>
				<div class="col-md-10">
				<input type="password" name="password" id="password" class="form-control" placeholder="Enter Password"></div>
			</div>
				
		
			<button type="submit" name="add" class="btn btn-info btn-lg">Add</button>
			<a href="user.php" class="btn btn-danger btn-lg">Cancel</a>
			</div>
			</form>
	</div>

</div>

</body>
</html>
