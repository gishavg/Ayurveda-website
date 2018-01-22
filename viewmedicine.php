<html>
<head>
</head>
<body>
<div style="position:absolute;top:46px;left:187px;background:#FFFFFF"> 
<form method="POST" name="booking">
 
          <table width="374" border="1">
<?php
include "connect.php";
	if(!$conn)
	{
		echo "not connected";
	}
	session_start();
$query="select medicinebookingid,patientid,patientname,typeofpayment,bookingdate,status from  medicinebooking  where status='ordered'&& hospitalusername='".$_SESSION["userid"]."'";
$query1=mysql_query($query);
$i=1;
echo "<tr><td colspan=8><p>PATIENT MEDICINE BOOKING DETAILS</p></td></tr>";
echo "<tr><th>slno</th><th>Medicine booking id</th><th>Patientid</th><th>Patientname</th><th>Type of payment</th><th>Booking date</th><th>Status</th></tr>";
while($row=mysql_fetch_array($query1))
{
	 //echo "<img src="$r['path']." alt='Slider 02' width='200' height='300' />";
					// echo "<tr><td>".$r['treatmentid']."</td>";
	echo "<td>".$i."</td>";
	echo "<td>".$row['medicinebookingid']."</td>";
	echo "<td>".$row['patientid']."</td>";
	echo "<td>".$row['patientname']."</td>";
	echo "<td>".$row['typeofpayment']."</td>";
	echo  "<td>".$row['bookingdate']."</td>";
	echo  "<td>".$row['status']."</td>";
	echo "<td><a href='hospitalmedicineupdate.php?id=".$row["medicinebookingid"]."'>DELIVER</a></td>";
	$i++;
	echo "</td></tr>";		
}
?>
</table>
</form>
</div>
<div style="position:absolute;top:300px;left:200px">
<a href='hospitaldeliverydetail.php?id=".$row["medicinebookingid"]."'>VIEW DELIVERED DETAILS</a>
</div>
</body>
</html>
