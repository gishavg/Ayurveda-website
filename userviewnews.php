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
.style14 {color: #00CC00}
.style15 {
	font-size: 24px;
	font-weight: bold;
}
.style19 {color: #CCFF33}
.style22 {color: #99FF00}
.style23 {color: #FFFFFF}
.style25 {color: #FFFFFF; font-weight: bold; }
.style26 {color: #99FF33}
.style27 {color: #CC0000}
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
				   <a href="userabout.php">About Us</a></span><span class="style7"><span class="style8">"        "</span>
				<a href="usercontact.html"> Contact Us </a></span></h2>
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
                       	     <table>
	   <th align="center">
	   </table>
		<div > 
		 <table  border="1" bgcolor="#33FF66">
			<?php
				 include 'connect.php';
				 echo "<th><h1 style=27>"."TOPIC"."</h1></th><th><h1 style=27>"."NEWS DETAILS.. "."</h1></th>";
				 $s=mysql_query("select * from news");
				 while($r=mysql_fetch_array($s))
				 {
				 //echo "<img src="$r['path']." alt='Slider 02' width='200' height='300' />";
					// echo "<tr><td>".$r['newsid']."</td>";
					 echo "<tr><td>".$r['newstopic']."</td>";
					 echo "<td>".$r['newsnews']."</td>";
						//echo "<td>";echo "<a href=adminnewsedit.php?id=".$r['newsid'].">Edit</a>";echo "</td>";
					 //echo "<td>";echo "<a href=adminnewsdelete.php?id=".$r['newsid'].">Delete</a>";
					 echo "</td></tr>";
					
				 }
				 ?>
				
		  </table>
				 <div>
</span>
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
                <p align="center"><a href="index.php">Home</a> | <a href="usergallery.php">Gallery</a> | <a href="userservice.html">services</a> | <a href="userfeed.php">feedback</a> | <a href="userlog.php">Login</a>| <a href="userabout.html">About</a> |<a href="usercontact.html"> Contact Us </a></p>
                </p>
           	    <marquee>
           	    Copyright © 2048 <a href="#">Kerala Ayurveda </a> | Designed by Students, Sree Rama Govt. Polytechnic College
           	    </marquee>
<p>
            	  
       
           	  </p></div>
                <!--  Free CSS Templates by TemplateMo.com  -->
</div>
            <div id="templatemo_footer" style="position:absolute; top:1057px; left:205px; height: -7px; width: 945px;">        </div>
</div><!-- End Of container -->
<div align=center></div>
</body>
</html>