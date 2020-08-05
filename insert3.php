<?php

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'ajaxfeedback');

extract($_POST);

if(isset($_POST['submit'])){

	$q = "insert into ajaxfeedtable (Name,Email,Message,Rating) values ('$name','$email','$message','$range')";
	$query = mysqli_query($con,$q);
	header('location:index.php');
}



?>