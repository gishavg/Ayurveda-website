<html>
<head>
</head>
<body>
<form method="post"  name="form1" id="form1">
 <?php
			include 'connect.php';
			$query=mysql_query("select * from treatments where treatmentid=".$_GET["id"]);
			while($r=mysql_fetch_array($query))
			{
			$tid=$r['treatmentid'];
			$treat=$r['treatment'];
			$treatdes=$r['treatmentdescription'];
			}
?>


<p>TREATMENT UPDATION</p>

<table width="374" border="0">
  <td width="163"><label>
    <input type="hidden" name="id" value='<?php echo $tid ?>' />
    </label>
    treatmentname</td>
      <td height="37" colspan="2">:</td>
    <td width="144"><label>
        <input type="text" name="treatment" value='<?php echo $treat ?>' />
        </label>      </td>
  </tr>
  <tr>
    <td height="36">treatmentdescription</td>
    <td colspan="2">:
      <label></label></td>
    <td><label>
      <input type="text" name="treatmentdes" value='<?php echo $treatdes ?>' />
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
			$trea=$_POST['treatment'];
			$treatd=$_POST['treatmentdes'];
			
	$query="UPDATE treatments set treatment='$trea',treatmentdescription='$treatd' WHERE treatmentid=$id";
	mysql_query($query);
	Header("Location:hospitaltreatmentview.php");
		}
?>
</form>

</div>
</body>
</html>
