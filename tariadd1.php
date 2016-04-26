<html>
<body bgcolor="#fff3e5">
<?php
	$type=$_POST["txttype"];
	$isgl=$_POST["txtisgl"];
	$idbl=$_POST["txtidbl"];
	$usgl=$_POST["txtusgl"];
	$udbl=$_POST["txtudbl"];
	$avrm=$_POST["txtaroom"];
	$totrm=$_POST["txttroom"];

	include "connection.php";
	$qusr="select type from tariff where type='".$type."'";
	$rsuser=mysqli_query($qusr);
	if(mysqli_num_rows($rsuser)>0)
	{
		echo "<font color=#7c0000 size=5>PLEASE CHECK ROOM TYPE.</font>";
		die();
	}
	$qins="insert into tariff (type,inrsin,inrdbl,usdsin,usddbl,avroom,totroom) values ('$type',$isgl,$idbl,$usgl,$udbl,$avrm,$totrm)";
	if(mysqli_query($qins))
	{
		echo "<br><font color=#7c0000 size=5>Successfully add.</font>";
	}
	else
	{
		die("<b>Incorrect insert query.</b><br>".$qins);
	}
?>
</body>
</html>
