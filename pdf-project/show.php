<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h2>File Upload</h2>
<form method="POST" action="" >
	<input type="email" name="email"><br><br>
<input type="submit" name="submit"	>

</form>

</body>
</html>

<?php
 if(isset($_POST['submit'])){
 	$email = $_POST['email'];
 	echo "$email";
    $con = mysqli_connect('localhost','root','','filepdf');
    $sql = "SELECT id, email, file FROM files WHERE email='$email'";

    $querydisplay= mysqli_query($con, $sql);

    while($result = mysqli_fetch_array($querydisplay)){
    
     echo $result['id'];
     ?>
    <a href="<?php echo $result['file'] ?>" download="">Download</a>

     <?php
 }
}
?>