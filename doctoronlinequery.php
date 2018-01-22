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
            <div id="templatemo_header">  <div>
              <h2 align="left"><span class="style7"><a href="index.php" class="selected">Home </a> <span class="style8">"        "</span>
              <a href="usergallery.php">Gallery </a> <span class="style8">"        "</span>
              <a href="userservices.php">Services</a><span class="style8">"        "</span>
                <a href="userfeed.php">Feedback</a><span class="style8">"        "</span>
                <a href="userlog.php">Login</a></span><span class="style7"><span class="style8">"        "</span>
				<a href="userabout.html"> About</a></span></h2>
            </div>    
						<marquee scrollamount="4" direction="down"><img src="images/SDD.jpg" /></marquee>     

            </div>
			
            <div id="templatemo_content">
            	
                <div id="templatemo_content_left">
					<div id="templatemo_menu" align="left">
                   	  <ul class="style10" ><li class="first"><a href="usermedicinalplants.php" class="style11"><font size="2" >Medicinal Plants</font></a></li>
						<li class="first"><a href="userslidesofyoga.php" class="style11"><font size="2">Slides of yoga</font></a></li>
						<li class="first "><a href="userviewnews.php" class="style11"><font size="2" >View News</font></a></li>
						<li class="first "><a href="userviewhospitals.php" class="style11"><font size="2" >View Hospital</font></a></li>
						<li><a href="userhospital.php" class="style11"><font size="2" >Hospital Registration</font></a></li>
                        <li><a href="userpatient.php" class="style11"><font size="2" >Patient Registration </font></a></li>
                   </ul>
                    </div>
				</div>
				<!-- End Of Left -->
                <div id="templatemo_content_right">
    	            <div id="templatemo_content_right_bottom">
						<div id="templatemo_content_right_top">
                        	<div class="templatemo_post_area">
                            <div> 
	<form id="form2" name="form2" method="post" action="">
	  <p>
	    <?php
 	include "connect.php";
		if(!$conn)
			{
			echo "not connected";
			}	
				
				//$q2="select patientregistration.patientname,query.queryid from query join patientregistration on patientregistration.patientname=query.username";
				 $r=mysql_query("select * from query where queryid=$_GET[id]");
				//$r=mysql_query($q2);
				while($e=mysql_fetch_array($r))
				{
					$p=$e['username'];
					$s=$e['queryid'];
					}
					

	
	?> 
	    </p>
	  <p>&nbsp;</p>
	  <p>&nbsp;    </p>
	  <table width="506" height="267" border="0" align="center">
    <tr>
      <th colspan="3" scope="row"><div align="center"> ONLINE QUERY </div>        <label></label>      </th>
    </tr>
    <tr>
	<tr>
		<td><input name="id" type="hidden" value=<?php echo $s; ?> /><td>
		</tr>
		<tr>
      <td width="161" scope="row"><div align="left">Patient  Name </div></td>
      <td width="161" scope="row">:</td>
      <td width="276">
        <input name="textfield2" type="text2" size="10" value=<?php echo $p;?> />
              </td>
    </tr>
    <tr>
      <td scope="row"><div align="left">Query</div></td>
      <td scope="row">:</td>
      <td scope="row"><textarea name="textarea" cols="35" rows="8"></textarea></td>
    </tr>
    <tr>
      <th scope="row"> <label> </label>
          <h3 align="center">
            <input name="submit" type="submit" value="REPLY" />
        </h3></th>
      <th scope="row">&nbsp;</th>
      <th scope="row"> <label>
       <input name="cancel" type="reset"  value="CANCEL" />
      </label></th>
    </tr>
  </table>
</form>
	
			<?php
				if(isset($_POST['cancel']))
		{
			include "connect.php";
			Header("Location:doctorquery2.php"); 
		}
 	if(isset($_POST['submit']))
	{
		include "connect.php";
		if(!$conn)
			{
			echo "not connected";
			}
			$qid=$_POST['id'];
			$name=$_POST['textfield2'];
			$query=$_POST['textarea'];	
			$query1="insert into reply values($qid,'$name','$query')";
//	echo $query1;
	mysql_query($query1);

	Header("Location:doctorquery2.php"); 

	}
	?>
	</p>
                        	</div>
							
                            <div class="cleaner"></div>
						</div><!-- End Of Right Top -->			
					</div><!-- End Of Right Bottom -->	
                    <div class="cleaner"></div>		
					<div id="templatemo_content_right_bottom_section">
                   	  <div class="templatemo_text_area">
                        	<h1 class="style14">GALLERY</h1>
                            <a href="images/herbs1.jpg" rel="lightbox-gallery" ><img src="images/herbs1.jpg" alt="Flower" width="130" height="120" /></a>
							<a href="images/herbs2.jpg" rel="lightbox-gallery"><img src="images/herbs2.jpg" alt="Rose" width="129" height="121" /></a>
							<a href="images/images (2).jpg" rel="lightbox-gallery" ><img src="images/images (2).jpg" alt="Butterfly" width="131" height="121" /></a>
							<a href="images/download (2).jpg" rel="lightbox-gallery"><img src="images/download (2).jpg" alt="Twin Flower" width="148" height="122" /></a></div>
					</div><!-- End Of Right Bottom Section -->
                    <div class="cleaner"></div>	
                </div><!-- End Of Right -->
                <div class="cleaner"></div>
            </div><!-- End Of content -->
            <div class="templatemo_bottom_panel_section" style="position:absolute; top:935px; left:205px; height: 112px; width: 940px;">
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
            <div id="templatemo_footer" style="position:absolute; top:1057px; left:205px; height: -7px; width: 945px;">
             
        </div>
</div><!-- End Of container -->
<div align=center></div>
</body>
</html>