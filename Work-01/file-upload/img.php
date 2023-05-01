<?php
if(isset($_POST['submit'])){
	// print_r($_FILES['upload']);
	$imgName=$_FILES['upload']['name'];
	$tmp_name=$_FILES['upload']['tmp_name'];
	move_uploaded_file($tmp_name,'img/'. $imgName);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<img src="img/<?php if(isset($imgName)){echo $imgName;} ?>" alt="">
</body>
</html>