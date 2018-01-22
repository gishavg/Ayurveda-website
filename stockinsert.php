<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	color: #8000FF;
	font-style: italic;
	font-family: "Courier New", Courier, monospace;
}
.style2 {color: #00FFFF}
-->
</style>
</head>

<body>
<form method="post" name='stockinsertion'>
<table width="444" border="0">
<a href="hospitalstockview.php">VIEW STOCK</a>
<tr><td colspan="3" align="center"><h1 class="style1">STOCK INSERTION</h1></td>
</tr>
<tr><td width="251"><h3 class="style2">Enter the medicine name</h3></td><td width="11"><span class="style2"><strong>:</strong></span></td>
<td width="168"><input type="text" name="mname" value=''></td></tr>
<br>
<tr><td><h3 class="style2">Enter the medicine Description</h3></td><td><span class="style2"><strong>:</strong></span></td>
<td><input type="text" name="mdes" value=''></td></tr>
<br>
<tr><td><h3 class="style2">Enter the medicine stock</h3></td><td><span class="style2"><strong>:</strong></span></td>
<td><input type="text" name="mstock" value=''></td></tr>
<br>
<br>
<tr><td><h3 class="style2">Enter the medicine price</h3></td><td><span class="style2"><strong>:</strong></span></td>
<td><input type="text" name="mprice" value=''></td></tr>
<br>
<tr>
  <td height="41" colspan="3" align="center"><input name="submit" type="submit" class="style1" value="submit" /></td>
</tr>
</table>
<?php
		if(isset($_POST['submit']))
		{
			include "connect.php";
			if(!$conn)
			{
				echo "not connected";
			}
			$name=$_POST['mname'];
			$description=$_POST['mdes'];
			$stock=$_POST['mstock'];
			
			$price=$_POST['mprice'];
	session_start();
	$query="insert into stock(hospitalusername,medicinename,medicinedescription,stock,price) values ('".$_SESSION["userid"]."','$name','$description','$stock','$price')";
	
	mysql_query($query);
	}
			?>
</form>
</body>

</html>
