<?php 
session_start(); 
//Create a database connection
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "sarahah";
	$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	//Test if connection occured.
	if(mysqli_connect_errno()) {
		die("Database connection failed : " . mysqli_connect_error() . " ( " .mysqli_connect_errno() . ")");
	}


	$name=$_SESSION["name"];
	$username=$_SESSION["username"];
	$password=$_SESSION["password"];
	$email=$_SESSION["email"];

	$query = "SELECT * FROM messages
	WHERE username='$username'";
	$result = mysqli_query($con, $query);

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Messages | Sarahah</title>
 	<link rel="stylesheet" type="text/css" href="css/styles.css">
 </head>
 <body>
 <div class="container">
	 	
	 <h3>Messages (<?php echo $username?>) </h3>
	 <ul>
	 <?php while($row = mysqli_fetch_assoc($result)) { ?>
	 	
	 	<li><?php echo $row["msg"] ;?> | <a href="message.php">View</a> | <a href="delete.php">Delete</a></li>
	
	 <?php 
		}
	 ?>
	 </ul>

 </div>
 </body>
 </html>