<html>
<head>
</head>
<body>
<form method="post" name='facilityinsertion'>
Enter the hospital id:<input type="text" name="idtext" value=''>
<br>
Enter the facility:    <input type="text" name="factext" value=''>
<br>
<input name="submit" type="submit" value="submit" />

<?php
		if(isset($_POST['submit']))
		{
			include "connect.php";
			if(!$con)
			{
				echo "not connected";
			}
			$id=$_POST['idtext'];
			$fac=$_POST['factext'];
	$query="insert into facilites values($id,'$fac')";
	echo $query;
	mysql_query($query);
	}
			?>
</form>
</body>
</html>