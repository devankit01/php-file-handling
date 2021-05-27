<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h2>File Upload</h2>
<form method="POST" action="" enctype="multipart/form-data">
	<input type="email" name="email"><br><br>
<input type="file" name="pdf" ><br><br>
<input type="submit" name="submit"	><br><br>
<a href="show.php">Download Certificate</a>

</form>

</body>
</html>
<?php

$con = mysqli_connect('localhost','root','','filepdf');

if(isset($_POST['submit'])){

	$email = $_POST['email'];
	$files = $_FILES['pdf'];
	echo "$email";
	print_r($files);

    $filename = $files['name'];
    $fileerror = $files['error'];
    $filetmp = $files['tmp_name'];

    $filetxt = explode('.',$filename);
    $filecheck = strtolower(end($filetxt));

    $filewanted = array('pdf','jpg','png');

    if(in_array($filecheck,$filewanted )){

    $destination = 'destination/'.$filename;
    move_uploaded_file($filetmp,$destination);

    $q = ("INSERT INTO files (email, file) VALUES ('$email','$destination')");
    echo "$q";

    mysqli_query($con, $q);

   


}

}


?>