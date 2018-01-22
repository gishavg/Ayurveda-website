<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style2 {color: #800000}
-->
</style>
</head>

<body>
<?php
				
				include 'connect.php';
				  $s=mysql_query("select     hospitalname,hospitaladdress,hospitallocation,phno1,phno2,hospitalemailid,hospitalwebsite,foodtype,environmentaldetails,responsibleperson,responsiblepersonphno,responsiblepersonemailid,status from hospitalregistration where hospitalid=".$_GET["id"]);
				 while($r=mysql_fetch_array($s))
				 {
			
					 $hospitalname=$r["hospitalname"];
				 	$address=$r["hospitaladdress"];
					$location=$r["hospitallocation"];
					$phno1=$r["phno1"];
				 	$phno2=$r["phno2"];
					$email=$r["hospitalemailid"];
					$website=$r["hospitalwebsite"];
					$foodtype=$r["foodtype"];
				 	$environ=$r["environmentaldetails"];
					$respperson=$r["responsibleperson"];
					$resppersonphno=$r["responsiblepersonphno"];
				 	$resppersonemail=$r["responsiblepersonemailid"];
					$status=$r["status"];
		
					 
			}
			?>
				
<form action="" method="post"  name="form1" id="form1">

  <div align="right"></div>
  <table width="489" border="0" align="center">
  <tr>
    <th colspan="3" scope="col">HOSPITAL DETAILS </th>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td width="151">Name</td>
    <td width="17">:</td>
	<td width="307"><input name="name" type="text" readonly="" value=<?php echo $hospitalname ?> /></td>
  </tr>
  <tr>
    <td>Address</td>
    <td>:</td>
    <td><textarea name="add" cols="" rows="" readonly=""><?php echo $address ?></textarea> </td>
  </tr>
  <tr>
    <td>Location</td>
    <td>:</td>
    <td><input name="location" type="text" readonly="" value=<?php echo $location ?>/></td>
  </tr>
  
  <tr>
    <td>Phone no1 </td>
    <td>:</td>
    <td><input name="no1" type="text" readonly="" value=<?php echo $phno1 ?> /></td>
  </tr>
  <tr>
    <td>Phone no2 </td>
    <td>:</td>
    <td><input name="no2" type="text" readonly="" value=<?php echo $phno2 ?>/></td>
  </tr>
  <tr>
    <td height="36">Email id </td>
    <td>:</td>
    <td><input name="eid" type="text" readonly="" value=<?php echo $email ?>/></td>
  </tr>
  <tr>
    <td>Website</td>
    <td>:</td>
    <td><input name="website" type="text" readonly="" value=<?php echo $website ?>/></td>
  </tr>
  <tr>
    <td>Food type </td>
    <td>:</td>
    <td><input name="foodtype" type="text" readonly="" value=<?php echo $foodtype ?>/></td>
  </tr>
  <tr>
    <td>Environmental details </td>
    <td>:</td>
    <td><input name="edetails" type="text" readonly="" value=<?php echo $environ ?>/></td>
  </tr>
  <tr>
    <td>Responsible person </td>
    <td>:</td>
    <td><input name="rp" type="text" readonly="" value=<?php echo $respperson ?>/></td>
  </tr>
  <tr>
  	<td>Responsible person phno </td>
	<td>:</td>
    <td><input name="rpph" type="text" readonly="" value=<?php echo $resppersonphno ?>/></td>
	</tr>
  <tr>
    <td>Responsible person Email ID</td>
    <td>:</td>
    <td><input name="rpemail" type="text" readonly="" value=<?php echo $resppersonemail ?>/></td>
  </tr>
  
  
  <tr>
    <td>Status</td>
    <td>:</td>
    <td><label>
      <input name="status" type="text" readonly="" value=<?php echo $status ?>/> 
    </label></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"> <div align="center"></div></td>
    </tr>
</table>
</form>
 
 <?php
 	if(isset($_POST['submit']))
	{
		include "connect.php";
		if(!$conn)
			{
			echo "not connected";
			}	
				$name=$_POST['combo'];
				
				if($name=="Accepted")
				{
					$query=	"update hospitalregistration set status='$name' where hospitalid=".$_GET["id"];
					mysql_query($query);
				}
				else if($name=="Rejected")
				{
					$query1=	"delete from hospitalregistration  where hospitalid=".$_GET["id"];
					mysql_query($query1);
				}

	}
	?>

</body>
</html>
