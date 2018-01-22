<html>
<head>
</head>
<body>
<form method="post"  name="form1" id="form1">
<table border="1">
<p>VIEW BOOKING DETAILS</p>
 <?php
			include 'connect.php';
		$query=mysql_query("select * from booking where medicinebookingid=".$_GET["id"]);
			$i=1;
echo "<tr><th>slno</th><th>Medicine booking id</th><th>Medicinename</th><th>Quantity</th></tr>";
while($row=mysql_fetch_array($query))
{
	 //echo "<img src="$r['path']." alt='Slider 02' width='200' height='300' />";
					// echo "<tr><td>".$r['treatmentid']."</td>";
	echo "<td>".$i."</td>";
	echo "<td>".$row['medicinebookingid']."</td>";
	echo "<td>".$row['medicinename']."</td>";
	echo "<td>".$row['quantity']."</td>";
	$i++;
	echo "</td></tr>";	
	$str="update stock set stock=stock-	".$row["quantity"] ." where medicinename='" .$row["medicinename"]."'";
	mysql_query($str);
	
}
?>
</table>
</form>
<form method="post"  name="form1" id="form2">
<p>STATUS UPDATION</p>
<?php
include "connect.php";
	if(!$conn)
	{
		echo "not connected";
	}
	session_start();
$query1="select deliverydate,status from  medicinebooking  where  medicinebookingid=".$_GET["id"];
$query2=mysql_query($query1);

while($row=mysql_fetch_array($query2))
{
	
	$ddate=$row['deliverydate'];
	$dstatus=$row['status'];

}

?>
<table width="374" border="0">

    <tr>
    <td height="36">Delivery date:</td>
    <td colspan="2">:
      <label></label></td>
    <td><label>
      <input type="date" name="date" value='<?php echo $ddate?>' />
      </label>    </td>
  </tr>
   <tr>
   <td height="36">Status:</td>
    <td colspan="2">:</td>
    <td><select name="dselect" style="width:100px;">
      <option value="select" selected><?php echo $dstatus?></option>
      <option value="delivered">delivered</option>
      <option value="notdelivered">notdelivered</option>
	   <option value="cancelled">cancelled</option>
    </select></td>
  </tr>
 </table>
<label></label>
  <label></label>
  <label></label>

  <input type="submit" name="submit2"  />
  <?php
 
if(isset($_POST['submit2']))
		{
			include "connect.php";
			if(!$conn)
			{
				echo "not connected";
			}
		 if($_POST['dselect']=="delivered")
 			 {
			$fac=$_POST['date'];
			$facd=$_POST['dselect'];
	$query3=mysql_query("UPDATE medicinebooking set deliverydate='$fac',status='$facd' WHERE medicinebookingid=".$_GET["id"]);
Header("Location:hospitalstatusupdateview.php");
	$query="update stock set stock.stock=stock.stock-booking.quantity from stock join booking on stock.medicinename=booking.medicinename where stock.hospitalusername='".$_SESSION["userid"]."' && booking.medicinebookingid=".$_GET["id"];
	}
	else if($_POST['dselect']=="notdelivered")
	{
	$fac=$_POST['date'];
			$facd=$_POST['dselect'];
	$query3=mysql_query("UPDATE medicinebooking set status='$facd' WHERE medicinebookingid=".$_GET["id"]);

	$query="update stock set stock.stock=stock.stock-booking.quantity from stock join booking on stock.medicinename=booking.medicinename where stock.hospitalusername='".$_SESSION["userid"]."' && booking.medicinebookingid=".$_GET["id"];
Header("Location:hospitalmsgdeliver.php");
	}
	else if($_POST['dselect']=="cancelled")
	{
	$fac=$_POST['date'];
			$facd=$_POST['dselect'];
	$query3=mysql_query("UPDATE medicinebooking set status='$facd' WHERE medicinebookingid=".$_GET["id"]);

	$query="update stock set stock.stock=stock.stock-booking.quantity from stock join booking on stock.medicinename=booking.medicinename where stock.hospitalusername='".$_SESSION["userid"]."' && booking.medicinebookingid=".$_GET["id"];
	Header("Location:hospitalmsgcancel.php");
	}
	}
?>
</form>
</body>
</html>
