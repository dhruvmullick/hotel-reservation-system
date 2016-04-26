<html>
<head>
	<title>edit</title>
</head>
<body bgcolor="#fff3e5">
<form>
	Enter id<input type=text name=txtsrno>
	<input type=submit value="go" name=sgo>
</form>
<?php
	if(isset($_GET["sgo"]))
	{
	include "connection.php";
	$qsel="select * from tariff where srno=".$_GET["txtsrno"];
	$rs=mysqli_query($qsel);
	if(mysqli_num_rows($rs)<1)
	{
		echo "<font color=purple>Record not found</font>";
		die();
	}
	$v=mysqli_fetch_array($rs);
?>
<form action="tariedit.php" method=POST>
<?php
	include "connection.php";
?>
<table>
<tr>
	<th align=left>Type	:</th>
	<td><input type=text name=txttype size=50 value=<?php $v["type"]?>></td>
</tr>
<tr>
	<th align=left>Inr single	:</th>
	<td><input type=text name=txtisgl size=30 value=<?php $v["inrsin"]?>></td>
</tr>
<tr>
	<th align=left>Inr double	:</th>
	<td><input type=text name=txtidbl size=30 value=<?php $v["inrdbl"]?>></td>
</tr>
<tr>
	<th align=left>Usd single	:</th>
	<td><input type=text name=txtusgl size=30 value=<?php $v["usdsin"]?>></td>
</tr>
<tr>
	<th align=left>Usd double	:</th>
	<td><input type=text name=txtudbl size=30 value=<?php $v["usddbl"]?>></td>
</tr>
<tr>
	<th align=left>av room	:</th>
	<td><input type=text name=txtaroom size=3 value=<?php $v["avroom"]?>></td>
</tr>
<tr>
	<th align=left valign=top>total room	:</th>
	<td><input type=text name=txttroom size=3 value=<?php $v["totroom"]?>></td>
</tr>
<tr>
	<td colspan=2 align=center><input type=submit name=s1 value="submit">
	<a href=tariedit.php></a></td>
</tr>
</table>
</form>
<?php } ?>
</body>
</html>
