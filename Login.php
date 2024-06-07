 <?php 
include'connectdb.php';
$unsuccess = 0;
if ($_SERVER['REQUEST_METHOD']=='POST') {
  // code...
  $Last_name = $_POST['email'];
  $Age = $_POST['password'];
  //$Course = $_POST['phone_number'];

  $sql ="SELECT *FROM students WHERE email = '$Last_name'";
  $result = mysqli_query($connect,$sql);
  if ($result) {
    // code...
    if(mysqli_num_rows($result)>0){
      $students = mysqli_fetch_assoc($result);
      $password_hash = $students['password'];
      //password_verify()- compares the hash password with the password the user has inserted.
      if (password_verify($Age, $password_hash)) {
        // code...
        //echo"login successful";

        //session- to store user data(in variable) across multiple pages
        session_start();//start user session
        $_SESSION['email'] =$Last_name;
        //$_SESSION['phone_number']=$Course;
        $_SESSION['Student_ID'] = $students['Student_ID'];

        header("location:profile3.php");
      }else{ 
       // echo"invalid login";
        $unsuccess =1;
      }
    }
  }
  }

 ?>   

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
  <link rel="stylesheet" type="text/css" href="Mydesign.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
     .error{
      color: blue;
      text-align: center;
     }
   </style>
</head>
<body>
  <ol id="toplist">
     <!--li class="left"><a href="Homepage.html">Home</a></li>
     <li class="left"><a href="signUp.html">SignUp</a></li>
     <li class="left"><a href="profile.html">
     Profile</a></li>
     <li><a href="About.html">About</a></li-->
     <!--a href="Logout.php">Logout</a-->

   </ol>
   

  <a href="#">Logout</a>
<div class="container">
		<h3 class="">Login</h3>
    <div class="imgBx">
      <div class="loginBx">
<form method="post" >
<div class="mb-3">
  <label class="form-label">Password</label>
  <input type="password" class="form-control"  placeholder="Enter Password" name="password">
</div>
<div class="mb-3">
  <label class="form-label">Email</label>
  <input type="email" class="form-control"  placeholder="Enter email" name="email">
</div>


	

  <?php 
  if($unsuccess) {
    // code...
    echo"<div class='error'>Invalid login</div>";
  }
  

   ?>
   <button type="submit" class="btn btn-primary">SUBMIT</button>
</form>
<div>Don't have an account?<a href="signUp.php">SignUp</a> </div>

	</div>
</div>
</div>

	

</body>
</html>