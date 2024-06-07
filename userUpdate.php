<?php

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $First_name= $_POST["username"];
    $Last_name= $_POST["email"];
    $Course = $_POST["phone_number"];
    $Age= $_POST["password"];

    try {
         include "connectdb.php";

        $sql= "UPDATE students SET username= :username,email=:email,phone_number=:phone_number,password=:password WHERE Student_ID= $Student_ID;";

        $stmt = $pdo->prepare($sql); 

        $stmt->bindParam(":username",$First_name);
        $stmt->bindParam(":email",$Last_name);
        $stmt->bindParam(":phone_number",$Course);
        $stmt->bindParam(":password",$Age);

        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("location:profile3.php");

        die();
       } catch (PDOException $e) {
        die("Query failed:" .$e->getMessage());
        
    }

}
else{
    header("location:profile3.php");

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
     <li class="left"><a href="Homepage.html">Home</a></li>
     <li class="left"><a href="signUp.php">SignUp</a></li>
     <li class="left"><a href="profile3.php">
     Profile</a></li>
     <li><a href="About.html">About</a></li>
   </ol>
   <li><a href="Logout.php">Logout</a></li>

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
                <button>Update</button>
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