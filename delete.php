<?php 
//delete operation
session_start();
include 'connectdb.php';//establish connection to db
$Student_ID = $_GET['Student_ID'];
$sql = "DELETE FROM students WHERE Student_ID = $Student_ID";
$result = mysqli_query($connect,$sql);
if($result){
	//echo "Deleted Successfully";
	header('location:display.php');
}else{
	die(mysqli_error($connect));
}





?>