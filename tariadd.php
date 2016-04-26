<html>
<head>
	<title>Add</title>
</head>
<body bgcolor="#fff3e5">
<form action="tariadd1.php" method=POST>
<?php
    include "index.php";
	include "connection.php";
?>
<table>
<tr>
	<th align=left>Type   :</th>
	<td><input type=text name=txttype size=50></td>
</tr>
<tr>
	<th align=left>Inr single   :</th>
	<td><input type=text name=txtisgl size=30></td>
</tr>
<tr>
	<th align=left>Inr double   :</th>
	<td><input type=text name=txtidbl size=30></td>
</tr>
<tr>
	<th align=left>Usd single   :</th>
	<td><input type=text name=txtusgl size=30></td>
</tr>
<tr>
	<th align=left>Usd double   :</th>
	<td><input type=text name=txtudbl size=30></td>
</tr>
<tr>
	<th align=left>av room   :</th>
	<td><input type=text name=txtaroom size=3></td>
</tr>
<tr>
	<th align=left valign=top>total room   :</th>
	<td><input type=text name=txttroom size=3></td>
</tr>
<tr>
	<td colspan=2 align=center><input type=submit name=s1 value="submit">
	<input type=submit name=s2 value="clear"><a href=tariadd.php></a></td>	
</tr>
</table>
</form>
</body>	
</html>