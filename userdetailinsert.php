<?php
	$l=mysqli_connect("localhost","root","root","hotel");
    $userid=$_POST["username"];
		$password=$_POST['password'];
		$username=$_POST['txtname'];
		$useremail=$_POST['txtemail'];
		$usercompany=$_POST['txtcompany'];
		$userphone=$_POST['txtnumber'];
		$useraddress=$_POST['txtaddress'];


	$qiu=mysqli_query ($l,"INSERT INTO `user`
	(`Userid`,`password`,`User Name`,`User Email`,`User Company`,`User Phone`,`User Address`)VALUES
	('$userid',
	'$password','$username','$useremail','$usercompany','$userphone','$useraddress');");

	if(!$qiu)
	{
		$message = "Sorry! Username already taken :()";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>window.location='userinfo.php';</script>";
	}
	header("location:login.php?flag=1");

?>
