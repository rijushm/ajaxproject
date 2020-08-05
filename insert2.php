<?php

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'ajaxform');

extract($_POST);

if(isset($_POST['submit'])){

	$q = "insert into ajaxtable2 (Username1,Password1) values ('$username','$password')";
	$query = mysqli_query($con,$q);
	header('location:index.php');
}



?>