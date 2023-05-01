

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="form.php" method="post">
		<label for="user">User Name</label>  <?php  ?><br>
		<input type="text" name="user"><br>
		
		<label for="email">Email</label><br>
		<input type="email" name="email"><br>
		
		<label for="pass">Password</label><br>
		<input type="password" name="pass"><br>
		
		<input type="submit" value="Submit" name="btn">
	</form>
</body>
</html>