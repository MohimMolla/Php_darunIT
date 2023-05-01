<?php
$nameErr = $phoneErr = $emailErr = $courseErr = "";
$name = $phone = $email = $course = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["phone"])) {
    $phoneErr = "Phone number is required";
  } else {
    $phone = test_input($_POST["phone"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["course"])) {
    $courseErr = "Course is required";
  } else {
    $course = test_input($_POST["course"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

	<style>form {
		display: flex;
		flex-direction: column;
		align-items: center;
	}

	label {
		font-weight: bold;
		margin-top: 10px;
		margin-bottom: 5px;
		display: inline-block;
	}

	input[type="text"],
	input[type="email"],
	input[type="number"] {
		padding: 5px;
		margin-bottom: 20px;
		border-radius: 5px;
		border: 1px solid #ccc;
		width: 100%;
		max-width: 400px;
	}

	input[type="submit"] {
		padding: 10px 20px;
		background-color: #007bff;
		color: #fff;
		border-radius: 5px;
		border: none;
		cursor: pointer;
	}
</style>


<body>
	<div class="container">
		<h1 class="text-center">Create a virtule Form</h1>
		<!-- <form action="">
			<label for="name">Name</label>
			<input type="text" name="name">
			<label for="phone">Phone</label>
			<input type="number" name="phone">
			<label for="email">Email</label>
			<input type="email" name="email">
			<label for="course">Course</label>
			<input type="text" name="course">
			<label for="batch">Batch</label>
			<input type="text" name="course">
		</form> -->
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<label for="name">Name:</label>
	<input type="text" name="name" value=""> : <?php echo $name;?>
	<span class="error"><?php echo $nameErr;?></span>
	<br><br>

	<label for="phone">Phone:</label>
	<input type="number" name="phone" value="<?php echo $phone;?>">
	<span class="error"><?php echo $phoneErr;?></span>
	<br><br>

	<label for="email">Email:</label>
	<input type="email" name="email" value="<?php echo $email;?>">
	<span class="error"><?php echo $emailErr;?></span>
	<br><br>

	<label for="course">Course:</label>
	<input type="text" name="course" value="<?php echo $course;?>">
	<span class="error"><?php echo $courseErr;?></span>
	<br><br>

	<input type="submit" name="submit" value="Submit">
</form>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>