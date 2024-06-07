<?php
session_start();
if(!isset($_SESSION['email'],$_SESSION['id'])){
	header("location: Login.php");
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="MyStyle.css">
	<script src="signup.js" type="text/javascript"></script>
</head>
<body>
	<a href = "Logout.php">Logout</a>
	<ol id="toplist">
		<li class="left"><a href="signUp.php">SignUp</a></li>
		<li><a href="profile3.php">Profile</a></li>
		<li class="left"><a href="About.php">About</a></li>
	</ol>
	<h2>Strathmore University</h2>

	<?php
	$Email =$_SESSION['email'];
	echo"Welcome $Email";
	
	?>
	<div class="brightness">
		<img src="school.jpg">
		<br>
	</div>
	<p>The SU-Educator is an online based application website that provides students all around the word to apply for and attend to their classes virtually<a href="https://elearning.strathmore.edu/">online</a> at the comfort of their own home</p>
	<p>Technically university being a higher level of education, it necessitates effort and dedication.</p><br>
	
	<table>
		<tr>
			<th>Country</th>
			<th>Contact</th>
			<th>Email</th>
		</tr>
		<tr>
			<td>Kenya</td>
			<td>+245789665544</td>
			<td>su@gmail.com</td>
		</tr>
		<tr>
			<td>Uganda</td>
			<td>+256789007765</td>
			<td>su@gmail.com</td>
		</tr>
		<tr>
			<td>Tanzania</td>
			<td>+255788995543</td>
			<td>su@gmail.com</td>
		
	</table>
	<h3>Study</h3>
	<ul>
		<li>Undergraduate</li>
		<li>Graduate</li>
		<li>Postgraduate</li>
		<li>Diploma</li>
		<li>Professional Courses</li>
		<li>Clearing 2024</li>
	</ul>
<br>  
</body>
</html>