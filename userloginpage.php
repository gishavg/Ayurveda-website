<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {color: #008000}
.style2 {
	font-family: Algerian;
	font-weight: bold;
	font-style: italic;
}
.style7 {
	font-family: Algerian;
	color: #CCFF00;
	font-style: italic;
}
-->
</style>
<link href="images/Sign up" rel="stylesheet" type="text/css" />
</head>

<body>
<form method ="POST">
<table width="348" border="0" align="center">
  
  <tr>
    <td colspan="3"><div align="center" class="style1">
      <h1 class="style2">Log In </h1>
    </div></td>
    </tr>
  <tr>
    <td width="131" height="43"><h3><span class="style7">USER NAME </span></h3></td>
    <td width="3">:</td>
    <td width="200"><input type="text" name="username" />    </td>
  </tr>
  <tr>
    <td><h3><span class="style7">PASSWORD</span></h3></td>
    <td>:</td>
    <td><input name="password" type="password" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" align="center">
      <input name="submit" type="submit" class="style1" value="LOGIN" />    </td>
    </tr>
  <tr>
    <td height="57" colspan="3"><a href="userpatient.php"></a>      <div align="center"><a href="userpatient.php">New Patient Registration </a></div></td>
    </tr>
</table>
</form>
<?php

session_start();
$msg="";
if(isset($_POST['submit']))
{
$id=$_POST["username"];
$password=$_POST["password"];
include "connect.php";
$valid="select count(1) as count1 from login where username='$id' and password ='$password'";
$val1=mysql_query($valid);
$val2=mysql_fetch_object($val1);

$c="select role from login where  username='$id' and password ='$password'";
$d=mysql_query($c);
$e=mysql_fetch_object($d);

if($val2->count1==0)
{

echo '<script language="JavaScript" type="text/javascript">alert("Invalid username & password");</script>';//Header("Location:'home page.php'");
}
else
{
$_SESSION["userid"]=$id;


if($e->role=='hospital')
{
$c="select hospitalid from hospitalregistration where username='$_SESSION[userid]'";
$d=mysql_query($c);
$e=mysql_fetch_object($d);
$_SESSION["id"]= $e->hospitalid;
Header("Location:hospitalindex.php");
}
elseif($e->role=='patient'){
$c="select patientid from patientregistration where username='$_SESSION[userid]'";
$d=mysql_query($c);
$e=mysql_fetch_object($d);
$_SESSION["id"]= $e->patientid;

Header("Location:patienthome.php");
}
elseif($e->role=='doctor'){
$c="select doctorid from doctorregistration where username='$_SESSION[userid]'";
$d=mysql_query($c);
$e=mysql_fetch_object($d);
$_SESSION["id"]= $e->doctorid;

Header("Location:doctorhome.php");
}
elseif($e->role=='admin')
{
Header("Location:adminhome.php");
}
}
}
?>

</body>
</html>
