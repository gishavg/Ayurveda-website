<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
<table width="200" border="0" align="center">
  <tr>
    <th colspan="3" scope="col"></div></th>
  </tr>
  <tr>
    <td height="65" colspan="3"><textarea name="feedback" cols="75" rows="5"></textarea>
                       </td>
  </tr>
            <tr><td>                   <input name="submit" type="submit" value="FEED BACKS" /></td></tr>
  </table>
 
<label></label>
  <div align="center"></div>
 
</form>
 <?php
 	if(isset($_POST['submit']))
	{
		include "connect.php";
		if(!$conn)
			{
			echo "not connected";
			}	
				$text=$_POST['feedback'];
				
			$query=	"insert into feedback (feedback)values('$text')";
//echo $query;
	mysql_query($query);

	

	}
	?>

</body>
</html>
