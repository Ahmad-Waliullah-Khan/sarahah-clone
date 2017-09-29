<?php
session_start(); 
require_once("included_functions.php");

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

if(isset($_POST['submit']))
{
	//form was submitted
	$username =$_POST['username'];
	$password =$_POST['password'];

	

	//Read data from users table for comparision 
		$query = "SELECT * FROM users";
		$result = mysqli_query($con, $query);

		while($row = mysqli_fetch_assoc($result)) {
			//check if the username exists
		
			 if(($row["username"]==$username) && ($row["password"]==$password))
			 {
			 	//successful login
			 	
			 	//session data
			 	$data= array (
			 			'name' => $row["name"],
			 			'username' => $username,
			 			'password' => $password,
			 			'email' => $row["email"]
			 		);
			 
			 	$_SESSION["name"]=$row["name"];
			 	$_SESSION["username"]=$username;
			 	$_SESSION["password"]=$password;
			 	$_SESSION["email"]=$row["email"];
			 	redirect_to("profile.php?username=$username");
			 }
			 else
			 {
			 	$message = "There were some errors";
			 }



	}

	

}else {
	$username = "";
	$message="Please Login";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login | Sarahah.com </title>
</head>
<body>
<?php 
	
	echo $message;

?>
<!-- form that submits to itself for proessing -->
<form action="login.php" method="post">
	Username : <input type="text" name="username"><br>
	Password : <input type="password" name="password"><br><br>
	<input type="submit" name="submit" value="Submit">
</form>

</body>
</html>