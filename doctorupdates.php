<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" enctype="multipart/form-data" name="doctorsview">
 <?php
			include 'connect.php';
			$query=mysql_query("select * from doctorregistration where doctorid=".$_GET["id"]);
			while($r=mysql_fetch_array($query))
			{
			$id=$r['doctorid'];
			$hid=$r['hospitalid'];
			$dname=$r['doctorname'];
			$dage=$r['doctorage'];
			$dsex=$r['doctorsex'];
			$daddress=$r['doctoraddress'];
			$dph1=$r['phoneno1'];
			$dph2=$r['phoneno2'];
			$demailid=$r['doctoremailid'];
			$dq=$r['doctorqualification'];
			$ds=$r['doctorspecialization'];
			$du=$r['doctorusername'];
			}

?>
<table width="496" border="0">
  <tr>
    <th height="29" colspan="3" scope="col"><h1 align="center" class="style1">DOCTOR DETAILS </h1></th>
  </tr>
   <div>
   <td width="163"><label>
    <input type="hidden" name="id" value=<?php echo $id ?> />
    </label></td>
  <tr>
    <td colspan="3"><h2><tt class="style2">Personal Details.........</tt></h2></td>
    </tr>
  <tr>
    <td width="180">Name<span class="style24">*</span></td>
    <td width="17">:</td>
    <td width="284"><input type="text" name="dname" value="<?php echo $dname ?>"></td>
  </tr>
  <tr>
    <td>Age</td>
    <td>:</td>
    <td><input type="text" name="dage" value="<?php echo $dage?>"></td>
  </tr>
  <tr>
    <td>Sex</td>
    <td>:</td>
    <td>
 <input type="text" name="Gender" value="<?php echo $dsex?>">
			 </td>
  </tr>
  <tr>
    <td>Address</td>
    <td>: </td>
    <td><textarea name="dadd"><?php echo $daddress?></textarea></td>
  </tr>
  <tr>
    <td>Phone Number1 </td>
    <td>:</td>
    <td><input type="text" name="dphno1" value="<?php echo $dph1 ?>"></td>
  </tr>
  <tr>
    <td>Phone Number2 </td>
    <td>:</td>
    <td><input type="text" name="dphno2" value="<?php echo $dph2 ?>"></td>
  </tr>
  <tr>
    <td>Email ID </td>
    <td>:</td>
    <td><input type="text" name="dmail" value="<?php echo $demailid ?>"></td>
  </tr>
  </div>
  <div>
  <tr>
    <td colspan="3"><H2><tt class="style2">Educational Details........</tt></h2></td>
    </tr>
  <tr>
    <td>Qualification</td>
    <td>:</td>
    <td><input type="text" name="dq" value="<?php echo $dq ?>"></td>
  </tr>
  <tr>
    <td>specialization</td>
    <td>:</td>
    <td><select name="dselect" style="width:100px;">
      <option value="select" selected><?php echo $ds ?></option>
      <option value="eye">eye</option>
      <option value="ear">ear</option>
    </select></td>
  </tr>
  </div>
    <tr>
    <td align="center">
      <p>
        <input type="submit" name="delete" value="DELETE">
		</p> 
		</td>
		<td colspan="2" align="center"> 
		<p>
        <input type="submit" name="submit" value="UPDATE">
		</p>    
		</td>
	  
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
			$id=$_POST['id'];	
			$doname=$_POST['dname'];
			$doage=$_POST['dage'];
			$dosex=$_POST['Gender'];
			$doaddress=$_POST['dadd'];
			$phone1=$_POST['dphno1'];
			$phone2=$_POST['dphno2'];
			$doemailid=$_POST['dmail'];
			$doqualification=$_POST['dq'];
			$dospecialization=$_POST['dselect'];
		//session_start();
			$query=	"update doctorregistration set doctorname='$doname',doctorage=$doage,doctorsex='$dosex',doctoraddress='$doaddress'
,phoneno1='$phone1',phoneno2='$phone2',doctoremailid='$doemailid',doctorqualification='$doqualification',doctorspecialization='$dospecialization' where doctorid=$id";
	echo $query;
	mysql_query($query);
	header("location:hospitalviewdoctor.php");
	
}
	?>
	 <?php
 	if(isset($_POST['delete']))
	{
		include "connect.php";
		if(!$conn)
			{
			echo "not connected";
			}
			$id=$_POST['id'];	
			$doname=$_POST['dname'];
			$doage=$_POST['dage'];
			$dosex=$_POST['Gender'];
			$doaddress=$_POST['dadd'];
			$phone1=$_POST['dphno1'];
			$phone2=$_POST['dphno2'];
			$doemailid=$_POST['dmail'];
			$doqualification=$_POST['dq'];
			$dospecialization=$_POST['dselect'];
			
		//session_start();
			$query1="update doctorregistration set status='Resigned' where doctorid=$id";
	mysql_query($query1);
	
	$query2="select * from doctorregistration where status='Resigned' && doctorid=$id";
	$v=mysql_query($query2);
	while($ru=mysql_fetch_array($v))
	{
		$user=$ru['doctorusername'];
		$qu="delete from login where username=$user"; 
		mysql_query($qu);
    }
 	header("location:hospitaldoctorresign.php");
	}
	?>

</form>
</body>
</html>
