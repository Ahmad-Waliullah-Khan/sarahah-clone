<!DOCTYPE html>
<html>
<head>
	<title>Register | Sarahah.com</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<div class="container">
	<h1>Sarahah.com</h1>
	<h3>Register for a new profile</h3>
	<form method="post" action="reg_proc.php">
		<table align="center">
			<tr>
				<td>Name : </td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Username : </td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password : </td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>E-mail : </td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Photo</td>
				<td><input type="file" name="avatar"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit"></td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>