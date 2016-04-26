<html>
<head>
	<title>edit reservation</title>
	<script language=javascript src="function.js">
	</script>
	<script language=javascript>
	function checkout()
	{
		var i=0;
		for(x=0;x<document.f1.elements.length;x++)
		{
			if(document.f1.elements[x].value=="")
			{
				f1.txtname.focus();
				alert("Plz Enter All Value");
				i=1;
				break;
			}
		}
		if(i==0)
		{
			f1.method="POST";
			f1.action="editres.php";
			f1.submit();
		}
	}
	</script>
</head>
<body bgcolor="#fff2e5">
<form method=POST>
	Enter E-mail:
	<input type="text" name="txtemail" value="<?php echo $_REQUEST['txtemail'];?>">
	<table>
	<tr>
		<th align=left>CHECKIN DT:</th>
	<td>
		<select name=cmdday>
		<?php

		for($i=1;$i<=31;$i++)

			if($i==date("d"))
			{
				echo "<option value='$i' selected>$i</option>";
			}
			else
			{
				echo "<option value='$i'>$i</option>";
			}
		?>
		</select>
		<select name=cmdmonth>
		<?php

		for($i=1;$i<=12;$i++)

			if($i==date("m"))
			{
				echo "<option value='$i' selected>$i</option>";
			}
			else
			{
				echo "<option value='$i'>$i</option>";
			}
		?>
		</select>
		<select name=cmdyear>
		<?php

		for($i=2010;$i<=2020;$i++)
		{

			if($i==date("Y"))
			{
				echo "<option value='$i' selected>$i</option>";
			}
			else
			{
				echo "<option value='$i'>$i</option>";
			}
		}
		?>
		</select>
	</td>
	</tr>
	</table>
	<input type=submit value="go" name=sgo>
</form>
<?php
	if(isset($_POST["sgo"]))
	{
		include "connection.php";
		$email=$_POST["txtemail"];
		$cid=$_POST["cmdday"]."-".$_POST["cmdmonth"]."-".$_POST["cmdyear"];
		$qsel="select * from reservation where r_email='".$email."' and r_chkindt='".$cid."'";

		$rs=mysqli_query($qsel);

		if(mysqli_num_rows($rs)<1)
		{
			echo "<font color=purple>Record not found.</font>";
			exit();
		}
		$v=mysql_fetch_array($rs);
?>
<form action="editres.php" method=POST name=f1>
<table>
<tr>
	<th align=left>CHECKIN DT  :</th>
	<td>
		<select name=cmdday>
		<?php
		$d=substr($v["r_chkindt"],8);
		for($i=1;$i<=31;$i++)

		if($i==$d)
		{
			echo "<option value='$i' selected>$i</option>";
		}
		else
		{
			echo "<option value='$i'>$i</option>";
		}
		?>
		</select>
		<select name=cmdmonth>
		<?php
		$m=substr($v["r_chkindt"],5,2);
		for($i=1;$i<=12;$i++)

		if($i==$m)
		{
			echo "<option value='$i' selected>$i</option>";
		}
		else
		{
			echo "<option value='$i'>$i</option>";
		}
		?>
		</select>
		<select name=cmdyear>
		<?php
		$y=substr($v["r_chkindt"],0,4);
		for($i=2010;$i<=2020;$i++)
		{
			if($i==$Y)
			{
				echo "<option value='$i' selected>$i</option>";
			}
			else
			{
				echo "<option value='$i'>$i</option>";
			}
		}
		?>
		</select>
	</td>
</tr>
<tr>
	<th align=left>CHECKOUT DT   :</th>
	<td>
		<select name=cmbday>
		<?php
			$d=substr($v["r_chkoutdt"],8);
			for($i=1;$i<=31;$i++)
			{
				if($i==$d)
				{
					echo "<option value='$i' selected>$i</option>";
				}
				else
				{
					echo "<option value='$i'>$i</option>";
				}
			}
		?>
		</select>
		<select name=cmbmonth>
		<?php
			$m=substr($v["r_chkoutdt"],5,2);
			for($i=1;$i<=12;$i++)
			{
				if($i==$m)
				{
					echo "<option value='$i' selected>$i</option>";
				}
				else
				{
					echo "<option value='$i'>$i</option>";
				}
			}
		?>
		</select>
		<select name=cmbyear>
		<?php
			$y=substr($v["r_chkoutdt"],0,4);
			for($i=2010;$i<=2020;$i++)
			{
				if($i==$y)
				{
					echo "<option value='$i' selected>$i</option>";
				}
				else
				{
					echo "<option value='$i'>$i</option>";
				}
			}
		?>
		</select>
	</td>
</tr>
<tr>
	<th align=left>NO OF ROOMS   :</th>
	<td><input type=text name=txtroom size=3   value="<?php echo $v['r_rooms'];?>"></td>

	<th align=left>TYPE   :</th>
	<td colspan=3><input type=text name=txttype size=10 readonly onKeyPress="validtype()"  value="<?php echo $v['r_type'];?>"></td>
</tr>
<tr>
	<th align=left>FULL NAME   :</th>
	<td colspan=3><input type=text name=txtname size=50  value="<?php echo $v['r_name'];?>"></td>
</tr>
<tr>
	<th align=left>EMAIL   :</th>
	<td colspan=3><input type=text name="email" size=50  readonly onKeyPress="validemail()" value="<?php echo $v['r_email'];?>"></td>
</tr>
<tr>
	<th align=left>COMPANY   :</th>
	<td colspan=3><input type=text name=txtcompany size=50 onKeyPress="validcompany()" value="<?php echo $v['r_company'];?>"></td>
</tr>
<tr>
	<th align=left>TELEPHONE   :</th>
	<td colspan=3><input type=text name=txtnumber size=15 onKeyPress="validnumber()" value="<?php echo $v['r_phone'];?>"></td>
</tr>
<tr>
	<th align=left valign=top>ADDRESS   :</th>
	<td colspan=3><textarea name=txtaddress rows=5 cols=40><?php echo $v['r_address'];?></textarea></td>
</tr>
<tr>
	<th align=left>SPECIAL REQUIREMENT IF ANY   :</th>
	<td colspan=3><textarea name=txtspanyreq rows=5 cols=40><?php echo $v['r_spanyreq'];?> </textarea></td>
</tr>
<tr>
	<td align=center colspan=2><input type="submit" name="s2" value="submit"></td>

</tr>
</table>
<input type=hidden name=txtemail2 value="<?php $_POST['txtemail']?>">
</form>
<?php } ?>
</body>
</html>

<?php


		$qupd=mysqli_query("update tariff set avroom=".$norm." where type='".$type."'");
		$upd="update reservation set r_chkindt=$cid,r_chkoutdt=$cod,r_rooms=$norm,r_name=$name,r_email=$email,r_company=$comp,r_phone=$tele,r_address=$addr,r_spanyreq=$spreq where r_email=$emailn and r_chkindt=$cind";
		$u=mysqli_query($upd);
		echo "<br><font color=7c0000 size=5>THANK YOU FOR INTEREST IN THE HOTEL PARAS.</font>";



?>
