<body bgcolor="#fff2e5">
<?php
	include "connection.php";

	$cid=$_POST["cmdday"]."-".$_POST["cmdmonth"]."-".$_POST["cmdyear"];
	$cod=$_POST["cmbday"]."-".$_POST["cmbmonth"]."-".$_POST["cmbyear"];
	$norm=$_POST["txtroom"];
	$type=$_POST["txttype"];


		$qupd="update reservation set r_chkindt='".$cid."',r_chkoutdt='".$cod."',r_rooms=".$_POST["txtroom"].",r_type='".$_POST["txttype"]."',r_name='".$_POST["txtname"]."',r_company='".$_POST["txtcompany"]."',r_phone=".$_POST["txtnumber"].",r_address='".$_POST["txtaddress"]."',r_spanyreq='".$_POST["txtspanyreq"]."' where r_email='".$_POST["email"]."'";
		//echo $qupd;
		//exit;
		$rs=mysqli_query($qupd);
		echo "<script>window.location='edres.php';</script>";


?>
</body>
