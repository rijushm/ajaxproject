<?php

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'ajaxform');

extract($_POST);

if(isset($_POST['submit'])){

	$q = "insert into ajaxtable (Name,Username,Email,Password,Passwordverify) values ('$name','$username','$email','$password','$password1')";
	$query = mysqli_query($con,$q);
	header('location:index.php');
}



?>