<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kerala Ayurveda</title>
<meta name="keywords" content="free css templates, Garden Website Design, Dark Gray, Green, HTML CSS" />
<meta name="description" content="Garden Website Design - free CSS template from templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<!-- Credit Goes To http://www.digitalia.be/software/slimbox2 for slimbox usage  -->
<script type="text/javascript" src="slimbox/jquery.min.js"></script>
<script type="text/javascript" src="slimbox/slimbox2.js"></script>
<link rel="stylesheet" href="slimbox/slimbox2.css" type="text/css" media="screen" />
<style type="text/css">
<!--
.style7 {font-family: "Times New Roman", Times, serif; color: #993333; }
.style8 {color: #000000}
.style10 {
	font-size: 5px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style11 {font-size: 12px}
.style12 {color: #006600}
.style14 {color: #00CC00}
.style16 {
	font-size: 14;
	color: #000000;
}
-->
</style>
</head>
<body> 
<p>&nbsp;</p>

<div id="templatemo_container">
     
            <!--  Free CSS Templates by TemplateMo.com  -->
  <div>  <div style="background-color:#000000">
              <h2 align="left"><span class="style7">
			 <a href="adminhome.php" class="selected">Home </a> <span class="style8">"        "</span>
              <a href="admingallery.php">Gallery </a> <span class="style8">"        "</span>
              <a href="adminservices.php">Services</a><span class="style8">"        "</span>
                <a href="adminfeed.php">Feedback</a><span class="style8">"        "</span>
                <a href="index.php">LogOut</a></span></h2>
			<?php
				
				include 'connect.php';
				 $s=mysql_query("select * from medicinalplants where plantid=".$_GET["id"]);
				 				 while($r=mysql_fetch_array($s))
				 {
				 //echo "<img src="$r['path']." alt='Slider 02' width='200' height='300' />";
					 $plantid=$r["plantid"];
					 $plantname=$r["plantname"];
					 $plantscientificname=$r["plantscientificname"];
					 $plantdescription=$r["plantdescription"];
					  $picture=$r["picture"];
			}
				?>
				
				<form action="" method="post"  enctype="multipart/form-data" name="form1" id="form1">

<p>MEDICINAL PLANT ADD </p>

<table width="374" border="0"><tr>
<td width="153" height="37">plantname</td>
    <td width="18">:</td>
	
    <td>
      <label>
        <input type="text" name="pname" value=<?php echo $plantname ?> />
      </label>    </td>
<td width="153" height="37"></td>
    <td width="18"></td></br>
	
    <td>
      <label>
        <input type="hidden" name="pid" value=<?php echo $plantid ?> />
      </label>    </td>

    
  </tr>
  <tr>
    <td height="36">plantscientificname</td>
    <td>:</td>
    <td><label>
      <input type="text" name="psname" value=<?php echo $plantscientificname ?>/>
    </label></td>
  </tr>
  <tr>
    <td>plantdescription</td>
    <td>:</td>
    <td>
      <label>
        <textarea name="pdesc"><?php echo $plantdescription ?></textarea>
      </label>   </td>
  </tr>
  <tr>
    <td>plantpicture</td>
    <td>:</td>
    <td><img src="<?php echo $picture ?>" width=200 height=200><input name="tmppicture" type="hidden" value="<?php echo $picture ?>" />
	<input type="file" name="myfile" /></td>
  </tr>
  <tr>
    <td><div align="center">
      <input type="submit" name="sub" value="Submit" >
    </div></td>
    <td>:</td>
    <td>
      <div align="center">
        <input type="submit" name="Submit2" value="Cancel" />
        </div>   </td>
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
		$plantid=$_POST['pid'];
		$plantname=$_POST['pname'];
		$plantscientificname=$_POST['psname'];
		$plantdescription=$_POST['pdesc'];
		$imagename=$_POST['tmppicture'];
		
		//to insert picture
		
		if($_FILES["myfile"]["name"]=="")
		{
		}
		else
		{
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
	}
	//end of picture upload
		
		
		$query="delete from medicinalplants where plantid='$plantid'";
		mysql_query($query);
		header("location:adminplantview.php");
	}
		
  ?>
	  </span></h2>
            </div>    
  </div>
  <div id="templatemo_content">
            	
                <div id="templatemo_content_left">
					<div id="templatemo_menu" align="left">
                   	  <ul class="sidebar_list">
                    	<li class="first"><a href="adminplantadd.php">Add Medicinal plants</a></li>
						<li class="first"><a href="adminaddnews.php">Add News </a></li>
						 <li><a href="adminhospitalview.php">View Hospitals</a></li>
						<li class="first"><a href="adminfeedbackview.php">View Feedback </a></li>
                        <li><a href="adminfaq.php">Add FAQ</a></li>
                        
                       
                        <li><a href="adminplantview.php">View Medicinal Plants</a> </li>
					 <li><a href="adminnewsview.php">View News</a> </li>
                	</ul>
                    </div>
				</div>
			  <div style="position:absolute; right:216px; top:420px; height: 180px;">
			    <!-- End Of Left -->
              </div>
				<!-- End Of Right -->
<div class="cleaner"></div>
            </div><!-- End Of content -->
            <div class="templatemo_bottom_panel_section">
              <div class="cleaner"> <p align="center">&nbsp;</p>
                <p align="center"><a href="index.php">Home</a> | <a href="usergallery.php">Gallery</a> | <a href="userservice.html">services</a> | <a href="userfeed.php">feedback</a> | <a href="userlog.php">Login</a>| <a href="userabout.html">About</a> </p>
                </p>
           	    <marquee>
           	    Copyright © 2048 <a href="#">Kerala Ayurveda </a> | Designed by Students, Sree Rama Govt. Polytechnic College
           	    </marquee>
<p>
            	  
       
           	  </p></div>
                <!--  Free CSS Templates by TemplateMo.com  -->
            </div>
            <div id="templatemo_footer">
             
        </div>
</div><!-- End Of container -->
<div align=center></div>
</body>
</html>