<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<style>
	form {
		background-color: #f2f2f2;
		padding: 20px;
		border-radius: 5px;
		max-width: 500px;
		margin: 0 auto;
		margin-top: 5em;
	}

	label {
		display: block;
		font-weight: bold;
		margin-bottom: 10px;
	}

	input[type="file"] {
		margin-bottom: 20px;
	}
	input[type="submit"] {
		background-color: #4CAF50;
		color: wheat;
		padding: 10px 20px;
		border: none;
		border-radius: 5px;
		cursor: pointer;
	}
	input[type="submit"]:hover {
  background-color: #3e8e41;
}

</style>

<body>
	<form action="img.php" method="post" enctype="multipart/form-data">
		<label for="upload">File Upload :</label>
		<input type="file" name=" upload"> <br>
		<input type="submit" value="Submit" name="submit">

	</form>
</body>

</html>