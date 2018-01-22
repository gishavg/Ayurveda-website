<html>
<head>
</head>
<body>
<div style="position:absolute;background:#FFFFFF"> 
<form method="POST" name="patient">
 <div style="position:absolute;top:46px;left:87px;background:#333333"> 
          <table border="1">
	
<?php
include "connect.php";
	if(!$conn)
	{
		echo "not connected";
	}
	session_start();
$query="select * from patientregistration where patientid in(select patientid from medicinebooking where hospitalusername='".$_SESSION["userid"]."')";
$query1=mysql_query($query);
$i=1;
echo "<p><b><font color='#CC9933'>PATIENT DETAILS</font></b></p>";
echo "<tr><th>slno</th><th>Patientid</th><th>Patientname</th><th>Patient address</th><th>Patient phoneno</th><th>Patient emailid</th></tr>";
while($row=mysql_fetch_array($query1))
{
	 //echo "<img src="$r['path']." alt='Slider 02' width='200' height='300' />";
	// echo "<font color='#999933'>";				
	echo "<td><font color='#996666'>".$i."</font></td>";
	echo "<td>".$row['patientid']."</td>";
	echo "<td>".$row['patientname']."</td>";
	echo "<td>".$row['patientaddress']."</td>";
	echo "<td>".$row['patientphoneno']."</td>";
	echo "<td>".$row['patientemailid']."</td>";
	$i++;
	echo "</td></tr>";	
}
?>
</table>
</div>
</form>
</body>
</html>