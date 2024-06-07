<?php

$server = 'localhost';
$server_user = 'root';
$server_password = '';
$database = 'records';
//connect to db

$connect = mysqli_connect($server,$server_user,$server_password,$database);

if(!$connect){

	die(mysqli_connect_error());
}



 ?>