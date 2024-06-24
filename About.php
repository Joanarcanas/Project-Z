
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Gallery</title>
    <link rel="stylesheet" type="text/css" href="MyDesign.css">
    <style>
        /* Some basic styling */
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            grid-gap: 10px;
            padding: 10px;
        }  
ss
        .gallery img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        } 
    </style>
</head>
<ol id="toplist">
     <li class="left"><a href="Home.php">Home</a></li>
     <li class="left"><a href="signUp.php">SignUp</a></li>
     <li><a href="profile3.php">Profile</a></li>
     
   </ol>
  
<body>
    <h4>School Gallery</h3>

    <div class="gallery">
        <!-- Sample images -->       
        <img src="class.jpg" alt="Image 1">
        <img src="learning.jpg" alt="Image 2">
        <img src="school.jpg" alt="Image 3">
        <img src="learning.jpg.jpg" alt="Image 4">
        <img src="Library.jpg" alt="Image 5">
        <img src="collection.jpg" alt="Image 6">
        <!-- Add more images as needed -->
    </div>
</body>
</html>


















































<!--!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>About Us</title>
	<link rel="stylesheet" type="text/css" href="Mydesign.css">
	<script src="script.js"  type="text/javascript"></script-->
<!--/head>
<body>
	<ol id="toplist">
		<li class="left"><a href="Homepage.html">Homepage</a></li>
		<li class="left"><a href="signUp.html">Signup</a></li>
		<li class="left"><a href="About.html">About</a></li>
	</ol>
	<h3></h3-->







	<!--div class="title"></div>
	<div class="container">
		<h1>Contact Us</h1>
		<div class="imgBx">
			<p>Our friendly team would like to get to know you</p>
			<div class="loginBx">
			<div class="Loginform"-->
	<!--form id="form" onsubmit="return validInputs()">

		<div class="input-control">
		<label>Username*</label>
		<input type="text" name="First name" placeholder="enter your first name" id="first_name">
		<div class="error"></div>
	</div>

	<div class="input-control">
		<label>Password*</label>
		<input type="text" name="password" placeholder="Enter your password" id="password">
		<div class="error"></div>
	</div>
	    <div class="input-control">
		<label>Email Address*</label>
		<input type="text" name="Email Address" placeholder="Enter your email address" id="email">
		<div class="error"></div>
	</div>
	    <div class="input-control">
		<label>Phone Number*</label>
		<input type="number" name="phone_number" placeholder="Enter your phone number" id="phone_number">
		<div class="error"></div>
	</div>

		<label>Subject*</label>
		<input type="text" name="Subject" placeholder="Enter Subject">
		<label>Message*</label>
		<textarea>Enter your message</textarea>
		<div id="result1" style="color:white; background-color: brown; text-align: center;"></div>
            <div id="result" style="color:white; background-color: blue; text-align: center;"></div><br>
		<input type="submit" name="submit" placeholder="send application" class="submit">
	</form-->
</div>
</div>
</div>
</div>
<script>
	function validInputs(){
		var email = document.getElementById('email').value;
		var phone_number = document.getElementById('phone_number').value;

		var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
         var phoneNumberRegex = /^(\+254|0)\d{9}$/;

          // Additional validations for fields not being left empty
    if (username.trim() === "" || email.trim() === "" || password.trim() === "" || phoneNumber.trim() === "") {
        alert("Fields should not be left empty. Please fill all fields before submission.");
        
        return false;
    }
    // Validation for email
         if (!email.match(emailRegex)) {
            document.getElementById("result1").innerHTML = "Fields should not be empty";
            return false;
         }
// Validation for phone number
         if (!phoneNumber.match(phoneNumberRegex)) {
            document.getElementById("result1").innerHTML = "Invalid Phone Number";
            return false;
         }
         // If all validations pass, show success message
         document.getElementById("result1").innerHTML = "Success:Form submitted successfullys";
         return true;
      }

	


</script>
</body>
</html>