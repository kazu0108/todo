<?php
	require_once ("connection.php");
session_start();
// if (!isset($_SESSION['username'])) {
// 	header("location: login.php");
// }


?>
<!DOCTYPE html>
<html>
<head>
	<title>Bitcoin App</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">To Do</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li class="active"><a href="user.php">User</a></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <p class="navbar-text">Welcome back, guest</p>
      </ul>
  </div>
</nav>