<?php
	include "connection.php";
	$qupd="update tariff set type='".$_POST["txttype"]."',inrsin='".$_POST["txtisgl"]."',inrdbl='".$_POST["txtidbl"]."',usdsin='".$_POST["txtusgl"]."',usddbl='".$_POST["txtudbl"]."',avroom='".$_POST["txtaroom"]."',totroom='".$_POST["txttroom"]."' where type='".$_POST["txttype"]."'";
	if(mysqli_query($qupd))
	{
		echo "<br><font color=purple>Successfully update Record.</font>";
	}
	else
	{
		echo "<br>Incorrect Update Query.";
		echo "<br>".$qupd;
	}
?>
