<?php 
include ('function.php');
$objAdmin=new cruadApp();
if(isset($_POST['submit'])){
	$rmass=$objAdmin->addData($_POST);
}

 $students =$objAdmin->displayData();
 
//  if(isset($_GET['status'])){
// 	if($_GET['status']='edit'){
// 		$id=$_GET['id'];
// 		$rdata=$objAdmin->displayData_byId($id);
// 	}
//  }
 if(isset($_GET['status'])){
	if($_GET['status']='delete'){
		$delete_id =$_GET['id'];
		$objAdmin->deleteData($delete_id);
		
	}
 }
// if(isset($_GET['']))

 

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
			<?php if(isset($rmass)){echo $rmass;} ?>
			<h2 class=""><a href="index.php">Creat a form</a></h2>
			<label for="name">Name</label>
			<input class="form-control mb-2" type="text" name="name" placeholder="Enter Your name">
			<label for="roll">Roll</label>
			<input class="form-control mb-2" type="number" name="roll">
			<label for="file">File Upload</label>
			<input class="form-control mb-2" type="file" name="file">
			<input type="submit" value="Submit" name="submit">

		</form>
	</div>
	<hr>
	<div class="container my-4 p-4">
		<table class="table table-responsive">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Roll</th>
					<th>Image</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php while($student=mysqli_fetch_assoc($students)) {?>
				<tr>
					
					<td><?php echo $student ['ID'];?></td>
					<td><?php echo $student ['Name'];  ?></td>
					<td><?php echo $student ['Roll'] ; ?></td>			
					<td><img style="height: 100px; width:100px" src="img/<?= $student['Image']?>" alt=""></td>
					<td>
						<a class="btn btn-success" href="edit.php?status=edit&&id=<?php echo $student['ID'];?>">Edit</a>
						<a class="btn btn-warning" href="?status=delete&&id=<?php echo $student['ID'];?>">Delete</a>
				</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>