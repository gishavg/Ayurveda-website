<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	color: #0000FF;
	font-weight: bold;
}
.style2 {
	color: #33FF99;
	font-style: italic;
}
.style4 {color: #0000FF}
.style6 {color: #004080; font-weight: bold; }
-->
</style>
</head>

<body>

<form id="form1" name="form1" method="post" action="">

<table width="603" height="344" border="0" bgcolor="#CCCCCC" bordercolor="#666666">
  <tr>
    <td colspan="3"> <div align="center" class="style1">
      <h2 class="style2 style4" style="background-color:#FFFFFF">ENTER YOUR NEWS HERE </h2>
    </div></td>
  </tr>
  <tr>
    <td width="241"><h2><span class="style6">News Topic </span></h2></td>
    <td width="23"><div align="center" class="style6">:</div></td>
    <td width="325"><label>

        <div align="left">
          <input name="news" type="text" class="style6" size="45" />
        </div>
            </label>
    </td>
  </tr>
  <tr>
    <td><h2><span class="style6">News Description </span></h2></td>
    <td><div align="center" class="style6">:</div></td>
    <td>
      <label>
      
        <div align="left">
          <textarea name="newsdesc" cols="35" rows="5" class="style4"></textarea>
        </div>
      </label>
      <div align="center"></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td rowspan="2">
      <label>
        <div align="center">
          <input name="Submit" type="submit" class="style1" value="Submit" />
        </div>
      </label>
      <div align="center"></div>
    
    </td>
    <td>&nbsp;</td>
    <td rowspan="2">
      <label>
        <div align="center">
          <input name="cancel" type="reset" class="style1" value="Cancel" />
        </div>
      </label>
    
    </td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
  </tr>
</table>
a
</form>
<?php
include "connect.php";
if(isset($_POST['Submit']))
	{
		
		$newstopic=$_POST['news'];
		$newsdescription=$_POST['newsdesc'];
		$query="insert into news (newstopic,newsnews)values('$newstopic','$newsdescription')";
		
		mysql_query($query);
	}
		
  ?>
</body>
</html>
