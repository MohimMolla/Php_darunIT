<?php 
include ('function.php');
$objAdmin=new cruadApp();



 $students =$objAdmin->displayData();
if(isset($_POST['update'])){

}
$students =$objAdmin->displayData();
//  if(isset($_GET['status'])){
// 	if($_GET['status']='edit'){
// 		$id=$_GET['id'];
// 		$returndata = $objAdmin->displayData_byId($id);
// 	}}
 if(isset($_GET['status'])){
	if($_GET['status']='edit'){
		$id=$_GET['id'];
		$rdata=$objAdmin->displayData_byId($id);
	}
 }
 

 if(isset($_POST['update'])){
	$message= $objAdmin->updateData($_POST); 
	 }


 

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<style>
	/* Apply some basic styling to the form and its labels */
	/* body{
	align-items: center;
	max-width: 500px;
} */
	/* form {
  display:inline-block;
  flex-direction: column;
  align-items: center;
  text-align: center;
  justify-content: center;
  font-family: Arial, sans-serif;
  max-width: 500px;
  background-color: #9D8B8B;
  margin: 0 auto;
} */
	form {
		background-color: #f2f2f2;
		padding: 20px;
		border-radius: 5px;
		max-width: 500px;
		margin: 0 auto;
		margin-top: 5em;
	}

	label {
		margin-top: 1rem;
	}

	/* Style the form inputs */
	input[type="text"],
	input[type="number"],
	input[type="file"] {
		width: 100%;
		padding: 0.5rem;
		border: none;
		border-radius: 0.25rem;
		background-color: #B0F2DA;
		margin-top: 0.25rem;
	}

	/* Add some additional styling to the form inputs */
	input[type="text"]:focus,
	input[type="number"]:focus,
	input[type="file"]:focus {
		box-shadow: 0 0 0 2px #888F8C;
		outline: none;
	}

	/* Style the file upload input */
	input[type="file"] {
		border: none;
		background-color: transparent;
	}

	/* Add some additional styling to the submit button */
	input[type="submit"] {
		background-color: #007bff;
		color: #fff;
		padding: 0.5rem 1rem;
		border: none;
		border-radius: 0.25rem;
		margin-top: 1rem;
		cursor: pointer;
		transition: all 0.3s ease-in-out;
	}

	/* Add hover effects to the submit button */
	input[type="submit"]:hover {
		background-color: #0069d9;
		box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
	}

	a {
		text-decoration: none;
	}
</style>

<body class="ofset-4">
	<div class="container my-4 p-4 sahdow">
		
		<form action="" method="post" enctype="multipart/form-data">
			<?php if(isset($message)){echo $message;} ?>
			<h2 class=""><a href="index.php">Creat a form</a></h2>
		
			<label for="name">Name</label>
			<input class="form-control mb-2" type="text" name="u-name" value="<?php echo $rdata['Name'];?>">
			<label for="roll">Roll</label>
			<input class="form-control mb-2" type="number" name="u-roll" value="<?php echo $rdata['Roll'];  ?>">
			<label for="file">File Upload</label>
			<input class="form-control mb-2" type="file" name="u-file" value="<?php echo $rdata['Image'];  ?>"> 
			<img style="width: 100px; height: 100px" src="img/<?php echo $rdata['Image'];  ?>" alt="">
			<input type="hidden" name="u-id" value="<?php echo $rdata['ID'];  ?>" >
			<input type="submit" value="Update" name="update">

		</form>
	</div>
	<hr>
	



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>