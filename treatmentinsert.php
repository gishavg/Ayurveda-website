<html>
<head>
</head>
<body>
<div style="position:absolute;top:570px;left:495px;background:#FFFFFF"> 
<a href="hospitaltreatmentview.php">VIEW TREATMENTS</a> 
<form method="post" name='treatmentinsertion'>
<table width="374" border="0">
<tr><td colspan="3"><p>TREATMENT INSERTION</p></td></tr>
<br />
<tr><td>Enter the treatment</td><td>:</td><td> <input type="text" name="treattext" value=''></td></tr>
<br>
<tr><td>Enter the treatment description</td><td>:</td><td><input type="text" name="treatdestext" value=''></td></tr>
<br>
<tr><td colspan="3"><input name="submit" type="submit" value="submit" /></td></tr>
 
<?php
		if(isset($_POST['submit']))
		{
			include "connect.php";
			if(!$conn)
			{
				echo "not connected";
			}
			$treatment=$_POST['treattext'];
			$treatmentdes=$_POST['treatdestext'];
			session_start();
	$query="insert into treatments(treatment,treatmentdescription,username) values ('$treatment','$treatmentdes','".$_SESSION["userid"]."')";
	
	mysql_query($query);
	}
			?>
</form>
</body>
</html>