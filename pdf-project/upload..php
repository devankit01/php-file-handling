<?php

$con = mysqli_connect('localhost','root','','filepdf');

if(isset($_POST['submit'])){

	$email = $_POST['email'];
	$file = $_POST['file'];
	print_r($email);
	print_r($file)
}


?>