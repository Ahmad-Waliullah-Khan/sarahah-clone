<?php 
session_start(); 

$name=$_SESSION["name"];
$username=$_SESSION["username"];
$password=$_SESSION["password"];
$email=$_SESSION["email"];
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Sarahah</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<div class="container">
	<h3>Welcome back, <?php echo $name; ?></h3>
	
	<table align="center">
		<tr>
			<td>Name : </td>
			<td><?php echo $name ?></td>
		</tr>
		<tr>
			<td>Username : </td>
			<td><?php echo $username ?></td>
		</tr>
		<tr>
			<td>Password : </td>
			<td><?php echo $password ?></td>
		</tr>
		<tr>
			<td>Email : </td>
			<td><?php echo $email ?></td>
		</tr>
		<tr>
			<td></td>
			<td><a href="send.php">Send Message</a></td>
		</tr>
		<tr>
			<td></td>
			<td><a href="messages.php">View Messages</a></td>
		</tr>
	</table>
</div>
</body>
</html>