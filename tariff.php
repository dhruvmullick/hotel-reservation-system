<html>
<head>
	<title>Accomodation</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
</head>

<body>
<?php
	include "index1.php";
?>

<div id = "heading">
	<h1>Tariff And Policies</h1>
</div>

<?php
	include "connection.php";
	$qrysel="select * from tariff";
	$rs=mysqli_query($con,$qrysel);

	if(!$rs)
	{
		echo "<font color=purple size=4>In correct mysql select Query.</font>";
		die($qrysel);
	}
	echo "<center>";
	echo "<table class=table>";
	echo "<caption><font color='rgba(0,0,0,0.7)' size=4><b><i>Room Tariff</i></b></font></caption>";
	echo "<tr><th>ROOM</th><th colspan=2>INR</th><th colspan=2>USD</th><th>TOTAL</th></tr>";
	echo "<tr><th>TYPE</th><th>SINGLE</th><th>DOUBLE</th><th>SINGLE</th><th>DOUBLE</th><th>ROOM</th></tr>";

	while($v=mysqli_fetch_array($rs))
	{
		echo "<tr>";
		echo "<td>".$v['type']."</td>";
		echo "<td>".$v[1]."</td>";
		echo "<td>".$v[2]."</td>";
		echo "<td>".$v[3]."</td>";
		echo "<td>".$v[4]."</td>";
		echo "<td>".$v[5]."</td>";
		echo "</tr>";
	}
	echo "</table>";
?>
<br><br>
<center><table>
<tr>
	<td>
	<ul type=square>
		<li>Policies: </li>
		<ul>
			<li>Check in 12 hours.
				<li>Check out 12 hours.
				<li>Early arrival is subject to availability,For guaranted early check in,reservation needs to be made starlings form previous night.
				<li>Goverment taxes & levies extra as applicable
				<li>Inr Rs.700 (usd*60) for extra person/bed.
		</ul>
		<br>
		<li>Reservation Guarantee: </li>
			<ul>
				<li>All booking must be guaranteed at time of reservation bye money order or travel agency.
			</ul>
		<br>
		<li>Reservation Cancellation: </li>
		<ul>
			<li>Reservation must be cancelled 24 hours prior to the <br>planned arrivaltime.
			<li>One night room charge will be levied in case of non arrival.
		</ul>
	</ul>
</table>
<br />
</body>
</html>
