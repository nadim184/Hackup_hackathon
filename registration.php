<!DOCTYPE html>
<html>
	<head>
		<title>Hackupio</title>
		<meta  harset="UTF-8">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Permanent+Marker">
	</head>
	<body style="background-color: black;">
		<nav>		   
		<ul>
			<li><a href="index.html" class="cool-link">Home</a></li>
			<li><a href="about.html" class="cool-link">About </a></li>
			<li><a href="registration.html" class="cool-link">register</a></li>
			<li><a href="contact.html" class="cool-link">Contact</a></li>
		</ul>
		</nav>
		<div class="signup-form">
			<form class=""  method="post">
				<h1>Application</h1>
				<input type="text" name="name" placeholder="Full name" class="txtb">
				<input type="text" name="phone" placeholder="phone number" class="txtb">
				<input type="text" name="mail" placeholder="Email" class="txtb">
				<input type="text" name="function" placeholder="function" class="txtb">
				<input type="submit" value="Register" class="signup-btn" >
			</form>
		</div>
<?php 

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailfrom = $_POST['mail'];
	$message = $_POST['message'];

	$mailto = "kam@yahoo.fr";
	$headers = "From: ".$mailfrom;
	$txt = "you have received an e-mail from ".$name.".\n\n".$message;

	mail($mailto, $subject, $txt, $headers ) ;
	header("Location: index.php?mailsend") ;
 
}
?>
				
				
	</body>
</html> 