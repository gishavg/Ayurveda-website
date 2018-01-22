<html>
<head>
</head>
<body>
<a href="hospitalfacilityview.php">VIEW FACILITY</a>
<form method="post" name='facilityinsertion'> 
<table width="374" border="0">
<tr><td colspan="2"><p>FACILITY INSERTION</p></td></tr>
<tr><td>Enter the facility:</td><td><input type="text" name="idtext" value=''></td></tr>
<br>
<tr><td>Enter the facility Description:</td><td><input type="text" name="factext" value=''></td></tr>
<br>
<tr><td align="center"><input name="submit" type="submit" value="submit" /></td></tr>
</table>
<?php
		if(isset($_POST['submit']))
		{
			include "connect.php";
			if(!$conn)
			{
				echo "not connected";
			}
			$id=$_POST['idtext'];
			$fac=$_POST['factext'];
	session_start();
	$query="insert into facilites(facility,facilitydescription,username) values ('$id','$fac','".$_SESSION["userid"]."')";
	
	mysql_query($query);
	}
			?>
</form>
</body>
</html>