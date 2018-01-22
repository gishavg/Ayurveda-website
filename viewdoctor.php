<html>
<head>
</head>
<body>
<div style="position:absolute;background:#FFFFFF"> 
<form method="POST" name="patient">

          <table width="600px" height="300" border="1">
<?php
include "connect.php";
	if(!$conn)
	{
		echo "not connected";
	}
	session_start();
$query="select doctorregistration.doctorid,doctorregistration.doctorname,doctorregistration.phoneno1,doctorregistration.phoneno2,doctorregistration.status from doctorregistration  where hospitalid='".$_SESSION["userid"]."'";
$query1=mysql_query($query);
$i=1;
echo "<tr><th>slno</th><th>doctorid</th><th>doctorname</th><th>Phoneno1</th><th>Phoneno2</th><th>Status</th></tr>";
while($row=mysql_fetch_array($query1))
{
	 //echo "<img src="$r['path']." alt='Slider 02' width='200' height='300' />";
					// echo "<tr><td>".$r['treatmentid']."</td>";
	echo "<td>".$i."</td>";
	echo "<td>".$row['doctorid']."</td>";
	echo "<td>".$row['doctorname']."</td>";
	echo "<td>".$row['phoneno1']."</td>";
	echo  "<td>".$row['phoneno2']."</td>"; 
	echo  "<td>".$row['status']."</td>";
	$st=$row['status'];
	if($st=="Currently present")
	{
	echo "<td><a href='hospitaldoctorupdate.php?id=".$row["doctorid"]."'>View more details</a></td>";
	}
	else if($st=="Resigned")
	{
	echo "<td><a href='hospitaldoctorreisgn.php?id=".$row["doctorid"]."'>View more details</a></td>";
	}
	$i++;
	echo "</td></tr>";	
	
		
}
?>
 </table>
</form>                    
</body>
</html>