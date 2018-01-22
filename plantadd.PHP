<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style2 {
	color: #800040;
	font-style: italic;
}
.style3 {
	color: #009900;
	font-style: italic;
	font-family: Algerian;
}
.style4 {
	color: #FFFFFF;
	font-style: italic;
}
-->
</style>
</head>

<body>
<form action="" method="post"  enctype="multipart/form-data" name="form1" id="form1">
  <table width="652" height="394" border="0" bgcolor="#999999">
    <caption align="center" style="background-color:#666666">
    <h1 class="style4">MEDICINAL PLANT ADD</h1>
    </caption>
    <tr>
      <td width="301" height="37"><h2 class="style2">Plant Name </h2></td>
      <td width="16"><h2>:</h2></td>
      <td width="305"><label>
        <input type="text" name="pname" />
        </label>
      </td>
    </tr>
    <tr>
      <td height="36"><h2 class="style2">Plant Scientific Name</h2></td>
      <td><h2>:</h2></td>
      <td><label>
        <input type="text" name="psname" />
      </label></td>
    </tr>
    <tr>
      <td><h2 class="style2">Plant Description</h2></td>
      <td><h2>:</h2></td>
      <td><label>
        <textarea name="pdesc"></textarea>
        </label>
      </td>
    </tr>
    <tr>
      <td><h2 class="style2">Plant Picture</h2></td>
      <td><h2>:</h2></td>
      <td><input name="myfile" type="file" class="style3" /></td>
    </tr>
    <tr>
      <td height="114"><div align="center">
          <input name="sub" type="submit" class="style3" value="Submit" />
      </div></td>
      <td>:</td>
      <td><div align="center">
          <label>
          <input name="Submit" type="reset" class="style3" value="Reset" />
          </label>
      </div></td>
    </tr>
  </table>
  <label></label>
  <label></label>
  <label></label>
</form>
<?php
include "connect.php";
	if(isset($_POST['sub']))
	{
		
		$plantname=$_POST['pname'];
		$plantscientificname=$_POST['psname'];
		$plantdescription=$_POST['pdesc'];
		
		//to insert picture
		$uploadpath = "pictures/"; 
  		$uploadpath = $uploadpath.basename($_FILES["myfile"]["name"]); 
     	
  		if (!move_uploaded_file($_FILES["myfile"]["tmp_name"], $uploadpath)) 
		{
   		echo "There was an error uploading the file, please try again!"; 
		
  		}
		else
		{
		$image_name = "pictures/".$_FILES["myfile"]["name"]; 
  		$albumimage=$_FILES["myfile"]["name"]; 	
		$albumimage=$albumimage;   
		
		list($width,$height) = getimagesize($image_name); 
  		$new_image_name = "images/thumb_".$_FILES["myfile"]["name"]; 
  		if ($width > $height) 
   		{ 
   			$ratio = (250/$width); 
    		$new_width = round($width*$ratio); 
    		$new_height = round($height*$ratio); 
   		} 
  		else 
   		{ 
    		$ratio = (250/$height); 
    		$new_width = round($width*$ratio); 
    		$new_height = round($height*$ratio); 
   		} 
		$image_p = imagecreatetruecolor($new_width,$new_height); 
	}
	//end of picture upload
		
		
		$query="insert into medicinalplants (plantname,plantscientificname,plantdescription,picture)values('$plantname','$plantscientificname','$plantdescription','$image_name')";
		mysql_query($query);
	}
		
  ?>
</body>
</html>
