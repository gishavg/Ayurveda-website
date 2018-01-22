<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Liveveda for  Ayurveda Hospital</title>
<style type="text/css">
<!--
.style2 {
	color: #800000;
	font-size: 18px;
}
.style8 {font-size: 18px}
.style10 {color: #CCFF00; font-size: 18px; }
.style11 {color: #33FF66}
.style12 {
	color: #FF0000;
	font-weight: bold;
	font-style: italic;
	font-size: 24px;
}
.style13 {color: #FF0000}
.style18 {color: #FFFFFF}
.style19 {font-size: 18px; color: #FFFFFF; }
-->
</style>
</head>
<body>
<form method="post">
  <table width="479" height="489" align="center"  >
    <tr>
      <th colspan="3" scope="col"> <h1><span class="style10">PATIENT REGISTRATION</span></h1></th>
    </tr>
    <tr>
      <td colspan="3"><span class="style2"><u><span class="style11">All fields marked with </span></u><span class="style12">*</span><u><span class="style11"> are mandatory</span></u> </span></td>
    </tr>
    <tr>
      <td width="260"><span class="style8"><span class="style18">Name</span><span class="style13">*</span></span></td>
      <td width="33"><span class="style18"><strong>:</strong></span></td>
      <td width="170"><input name="name" type="required" /></td>
    </tr>
    <tr>
      <td><span class="style8"> <span class="style18">Address</span><span class="style13">*</span></span></td>
      <td><span class="style18"><strong>:</strong></span></td>
      <td><input name="add" type="required"/></td>
    </tr>
    <tr>
      <td><span class="style8"><span class="style18">Phone no.</span> <span class="style13">*</span> </span></td>
      <td><span class="style18"><strong>:</strong></span></td>
      <td><input name="phno" type="number" /></td>
    </tr>
    <tr>
      <td><span class="style8"><span class="style18">Age</span><span class="style13">*</span></span></td>
      <td><span class="style18"><strong>:</strong></span></td>
      <td><input name="age" type="number" /></td>
    </tr>
    <tr>
      <td><span class="style8"><span class="style18">Sex</span><span class="style13"> * </span></span></td>
      <td><span class="style18"><strong>:</strong></span></td>
      <td><input name="sex" type="radio" value="male" checked="checked"/>
        <span class="style18">male</span>
        <input name="sex" type="radio" value="female"  />
        <span class="style18">female</span></td>
    </tr>
    <tr>
      <td><span class="style8"> <span class="style18">Marital status</span><span class="style13"> *</span> </span></td>
      <td><span class="style18"><strong>:</strong></span></td>
      <td><input name="marital" type="reqiured" /></td>
    </tr>
    <tr>
      <td><span class="style19"> Height</span></td>
      <td><span class="style18"><strong>:</strong></span></td>
      <td><input name="height" type="number" /></td>
    </tr>
    <tr>
      <td><span class="style19"> Weight(in kg) </span></td>
      <td><span class="style18"><strong>:</strong></span></td>
      <td><input name="weight" type="number" /></td>
    </tr>
    <tr>
      <td><span class="style8"> <span class="style18">Email id</span><span class="style13">*</span></span></td>
      <td><span class="style18"><strong>:</strong></span></td>
      <td><input name="email" type="email" /></td>
    </tr>
    <tr>
      <td><span class="style8"> <span class="style18">User name</span><span class="style13">*</span></span></td>
      <td><span class="style18"><strong>:</strong></span></td>
      <td><input name="user" type="reqiured" /></td>
    </tr>
    <tr>
      <td height="28"><span class="style8"> <span class="style18">Password</span><span class="style13">* </span></span></td>
      <td><span class="style18"><strong>:</strong></span></td>
      <td><input name="password" type="password" class="reqiured" /></td>
    </tr>
    <tr>
      <td><span class="style8"> <span class="style18">Retype password</span><span class="style13">*</span></span></td>
      <td><span class="style18"><strong>:</strong></span></td>
      <td><input name="rpass" type="password" class="reqiured" /></td>
    </tr>
    <tr>
      <td><span class="style8"> <span class="style18">Treatment Details</span><span class="style13">* </span></span></td>
      <td><span class="style18"><strong>:</strong></span></td>
      <td><input type="text" name="treat" class="reqiured"/></td>
    </tr>
    <tr>
      <td><input name="result" type="reset" value="RESET" /></td>
      <td></td>
      <td><input name="submit" type="submit" value="SUBMIT" /></td>
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
		
	$name=$_POST['name'];
	$add=$_POST['add'];
	$phno=$_POST['phno'];
	$age=$_POST['age'];
	$sex=$_POST['sex'];
	$mar=$_POST['marital'];
	$height=$_POST['height'];
	$weight=$_POST['weight'];
	$email=$_POST['email'];
	$username=$_POST['user'];
	$treatments=$_POST['treat'];
	$pass=$_POST['password'];	
	$rpass=$_POST['rpass'];
	$role="patient";				
				
					
	if($name!=NULL && $add!=NULL && $phno!=NULL && $age!=NULL && $sex!=NULL && $mar!=NULL &&$email!=NULL &&$username!=NULL &&$pass!=NULL &&$treatments!=NULL )
	{
		if($pass!=$rpass)
		{
			echo '<script language="JavaScript" type="text/javascript">alert("PASSWORD MISMATCH");</script>';
			
		}
		else
		{
					$query="insert into  patientregistration 																(patientname,patientaddress,patientphoneno,patientage,patientsex,patientmaritalstatus,patientheight,patientweight,patientemailid,patientusername,treatmentdetails) values('$name','$add',$phno,$age,'$sex','$mar',$height,$weight,'$email','$username','$treatments')";
					//echo $query;
					mysql_query($query);
					$query1="insert into login values('$name','$pass','$role')";
					//	echo $query1;
					mysql_query($query1);
					Header("Location:login.php"); 
		}
	}
	else
	{
	echo '<script language="JavaScript" type="text/javascript">alert(" REGISTRATION FAILED ,PLEASE FILL MANDATORY FIELDS AND CHECK THE PASSWORD");</script>';
	}
	
	}
	?> 

</body>
</html>
