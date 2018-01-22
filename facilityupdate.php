<html>
<head>
</head>
<body>
<form method="post"  name="form1" id="form1">
 <?php
			include 'connect.php';
			$query=mysql_query("select * from facilites where facilityid=".$_GET["id"]);
			while($r=mysql_fetch_array($query))
			{
			$id=$r['facilityid'];
			$fac=$r['facility'];
			$facd=$r['facilitydescription'];
			}
?>


<p>FACILITY UPDATION</p>

<table width="374" border="0">
  <td width="163"><label>
    <input type="hidden" name="id" value=<?php echo $id ?> />
    </label>
 Facilityname</td>
      <td height="37" colspan="2">:</td>
    <td width="144"><label>
        <input type="text" name="facility" value=<?php echo $fac?> />
        </label>      </td>
  </tr>
  <tr>
    <td height="36">Facilitydescription</td>
    <td colspan="2">:
      <label></label></td>
    <td><label>
      <input type="text" name="facilitydescription" value=<?php echo $facd ?> />
      </label>    </td>
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
			$id=$_POST['id'];
			$fac=$_POST['facility'];
			$facd=$_POST['facilitydescription'];
			
	$query="UPDATE facilites set facility='$fac',facilitydescription='$facd' WHERE facilityid=$id";
	echo $query;
	mysql_query($query);
	Header("Location:hospitalfacilityview.php");
		}
?>
</form>
</div>
</body>
</html>
