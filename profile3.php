<?php
session_start();
include 'connectdb.php';
// Check if user is logged in
if (!isset($_SESSION['email'])) {
    // Redirect user to login page if not logged in
    header("Location: Login.php");
    exit();
}

// Include your database connection file
include 'connectdb.php';

// Retrieve email from session

//$First_name = $_SESSION['username'];
$Student_ID = $_SESSION['Student_ID'];
$Last_name = $_SESSION['email'];
$success=0;

// Fetch user details from database based on email (You need to implement this)
// Here, I assume you have a table named 'users' with columns 'email' and 'profile_photo'
// Replace this with your actual database query to fetch user details
$sql = "SELECT * FROM students WHERE email = '$Last_name'";
$result = mysqli_query($connect, $sql);
if ($result){
    $students=mysqli_fetch_assoc($result);//data is fetched as an assoc array

    $profile_photo = $students['profile_photo'];
    $First_name =$students['username'];
    $Last_name = $students['email'];
    $Course = $students['phone_number'];

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $Student_ID = $_POST['Student_ID'];
        $First_name = $_POST['username'];
        $Last_name = $_POST['email'];
        $Course = $_POST['phone_number'];
        $Age = $_POST['password'];
        $profile_photo = $_POST['profile_photo'];

        $sql = "UPDATE students SET username = '$First_name',email = '$Last_name',phone_number = '$Course',WHERE Student_ID = $Student_ID";

        $result = mysqli_query($connect,$sql);
        if($result){
            echo"Updated successfully";
            $sql = "UPDATE students SET profile_photo ='$profile_photo' WHERE Student_ID =$Student_ID";
            $result = mysqli_query($connect,$sql);
        }else{
            die(mysqli_error());
        }
    }



}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .profile {
            text-align: center;
            margin-bottom: 20px;
        }
        .profile img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .profile h2 {
            margin-top: 10px;
        }
        .profile p {
            color: #666;
        }
        .file-upload {
            margin-top: 20px;
        }
        .file-upload input[type="file"] {
            display: none;
        }
        .file-upload label {
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <ol id="toplist">
     <li class="left"><a href="Home.php">Home</a></li>
     <li class="left"><a href="signUp.php">SignUp</a></li>
     
     <li><a href="About.php">About</a></li>
   </ol>
   <!--li><a href="Logout.php">Logout</a></li-->

<div class="container">
    <div class="profile">
        <img id="profile-picture" src="class.jpg" alt="Profile Picture">
        <h2><?php echo $students['username']; ?></h2>
        <p><?php echo $students['email']; ?></p>
        <!--p>Email: <--?php echo $students['email']; ?></p-->
        <p>Phone_number:<?php echo $students['phone_number']; ?></p>
        <!--p>Interests: <!-?php echo $students['interests']; ?></p-->
        <!--p>Web Developer</p>
        <p>Location: Dallas, USA</p>
        <p>Interests: Coding, Skydiving, Hiking</p-->
    </div>
    <div class="file-upload">
        <form action="profile2.php" method="post" enctype="multipart/form-data">
                <input type="file" id="profile-photo" name="profile_photo" accept="image/*" onchange="previewImage(event)">
                <label for="profile-photo">Change Profile Photo</label>
                <input type="submit" name="submit" id="submit" placeholder="" >
            </form>
        </div>
    </div>

        <!--input type="file" id="profile-photo" accept="image/*" onchange="previewImage(event)">
        <label for="profile-photo">Change Profile Photo</label-->
    </div>
</div>

<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('profile-picture');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

</body>
</html>
