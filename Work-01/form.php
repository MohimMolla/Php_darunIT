<?php
if(isset($_POST['btn'])){
	$user=$_POST['user'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
}
?>

User : <?php if(isset($user)) echo $user ; ?><br>
Email:<?php if(isset($email)) echo $email;  ?><br>
Password :<?php if(isset($pass)) echo $pass; ?><br>