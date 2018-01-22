<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	color: #66FF33;
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
}
.style3 {color: #FFFF00}
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
<table width="512" height="226" border="0">
  <tr>
    <td height="45" colspan="3"><h1 align="center" class="style1">FAQ</h1></td>
  </tr>
  <tr>
    <td width="268"><span class="style3">ENTER YOUR QUESTION</span> </td>
    <td width="11"><strong>:</strong></td>
    <td width="219">
      <label>
        <input name="faq" type="text" size="45" />
        </label>
   </td>
  </tr>
  <tr>
    <td><span class="style3">ANSWER</span></td>
    <td><strong>:</strong></td>
    <td>
      <label>
        <textarea name="faqanswer" cols="33" rows="5"></textarea>
        </label>
   </td>
  </tr>
  <tr>
    <td>
      <label>
      <div align="center">
        <input type="submit" name="Submit" value="SUBMIT" />
      </div>
      </label>
      <div align="center"></div>
      </td>
    <td>&nbsp;</td>
    <td><label>
      <div align="center">
        <input type="reset" name="Submit2" value="CANCEL" />
        </div>
    </label></td>
  </tr>
</table>
</form>
<?php
include "connect.php";
if(isset($_POST['Submit']))
	{
		
		$faqquestion=$_POST['faq'];
		$faqreply=$_POST['faqanswer'];
		$query="insert into faq (faqquestion,faqreply)values('$faqquestion','$faqreply')";
		
		mysql_query($query);
	}
	
		
  ?>
</body>
</html>
