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
-->
</style>
</head>
<body>
<p>&nbsp;</p>
     
            <!--  Free CSS Templates by TemplateMo.com  -->
            <div style="position:absolute; background-color:#000000; left: 202px; top: 42px; width: 942px;"> 
              <h2 align="left"><span class="style7">
			  <a href="hospitalindex.php" class="selected">Home </a> <span class="style8">"        "</span>
              <a href="hospitalgallery.php">Gallery </a> <span class="style8">"        "</span>
              <a href="hospitalservices.php">Services</a><span class="style8">"        "</span>
                <a href="hospitalfeed.php">Feedback</a><span class="style8">"        "</span>
                <a href="index.php">LogOut</a></span></h2>
  </div>    
					<marquee scrollamount="4" direction="down"><img src="images/SDD.jpg" /></marquee>     	
            <div id="templatemo_content" style="position:absolute;top:122px;right:876px">
            	
                <div id="templatemo_content_left">
					<div id="templatemo_menu">
                   	 <ul class="sidebar_list">
                    	<li class="first"><a href="docter.php">Doctor Registration </a></li>
						<li><a href="hospitalviewdoctor.php">View Doctors  </a></li>
                        <li><a href="hospitalviewpatient.php">View Patient  </a></li>
                        <li><a href="hospitalviewmedicine.php">Booking Details </a></li>
                        <li><a href="doctorschedule.php">Doctor Allocation</a></li>
                        <li><a href="hospitaltreatmentinsertview.php">Treatments</a></li>
                        <li><a href="hospitalfacilityinsertview.php">Facility</a></li>
                        <li><a href="hospitalstockinsertview.php">Stock</a></li>
                    </ul>
                    </div>
				</div>
				<!-- End Of Left -->
    	            <a href="hospitaltreatmentinsert.php"><font color="#FFFFFF">INSERT TREATMENTS</font></a>
						
                       <div class="templatemo_post_area" style="position:absolute; left:375px; top; top: 2px;">
       	        <?php
		  		
				session_start();
				 include 'connect.php';
				 $s=mysql_query("select treatmentid,treatment,treatmentdescription from treatments where username='".$_SESSION["userid"]."'");
				  echo "<p align='center'><i><font color='#00CC00'>TREATMENTS</font></i></p>";
				  
				 while($r=mysql_fetch_array($s))
				 {
				 //echo "<img src="$r['path']." alt='Slider 02' width='200' height='300' />";
					// echo "<tr><td>".$r['treatmentid']."</td>";
					echo "<table width='500' border='1' align='center'>";
					 echo "<tr><td align='center'><p><b><font color='#CC9933'>".$r['treatment']."</font></b></p><br>";
					  echo "<font color='#999933'><b><u>Treatment description</u></b></font><br><br>";
					 echo "<font color='#996666'>".$r['treatmentdescription']."</font></td></tr>";
					// echo "<td><a href='hospitaltreatmentupdate.php?id=".$r["treatmentid"]."'>Update</a></td>";
					 echo "</td></tr>";
					 echo "</table>";
					}
				 ?>                
				
				
		
							
                            <div class="cleaner"></div>
						<!-- End Of Right Top -->			
					<!-- En					</div><!-- End Of Right Bottom -->	
        <div class="cleaner"></div>		
					<div id="templatemo_content_right_bottom_section" style="position:absolute;top:353px;right:-130px">
                   	  <div class="templatemo_text_area">
                        	<h1 class="style14">GALLERY</h1>
      <p><a href="images/Galavasthi-240x150.jpg" rel="lightbox-gallery" title="Flower"><img src="images/Galavasthi-240x150.jpg" alt="Flower" width="130" height="120" /></a>
		<a href="images/images (7).jpg" rel="lightbox-gallery" title="Rose"><img src="images/images (7).jpg" alt="Rose" width="129" height="121" /></a>
		<a href="images/images (8).jpg" rel="lightbox-gallery" title="Butterfly"><img src="images/images (8).jpg" alt="Butterfly" width="131" height="121" /></a>
		<a href="images/images (9).jpg" rel="lightbox-gallery" title="Twin Flower"><img src="images/images (9).jpg" alt="Twin Flower" width="148" height="122" /></a>
		<a href="images/images (10).jpg" rel="lightbox-gallery" title="Flower"><img src="images/images (10).jpg" alt="Flower" width="130" height="120" /></a>
		<a href="images/images (11).jpg" rel="lightbox-gallery" title="Flower"><img src="images/images (11).jpg" alt="Flower" width="130" height="120" /></a>
		<a href="images/images (17).jpg" rel="lightbox-gallery" title="Flower"><img src="images/images (17).jpg" alt="Flower" width="130" height="120" /></a>
		<a href="images/images (19).jpg" rel="lightbox-gallery" title="Flower"><img src="images/images (19).jpg" alt="Flower" width="130" height="120" /></a>
		<a href="images/images (21).jpg" rel="lightbox-gallery" title="Flower"><img src="images/images (21).jpg" alt="Flower" width="130" height="120" /></a>
		<a href="images/images (23).jpg" rel="lightbox-gallery" title="Flower"><img src="images/images (23).jpg" alt="Flower" width="130" height="120" /></a>
		<a href="images/images (43).jpg" rel="lightbox-gallery" title="Flower"><img src="images/images (43).jpg" alt="Flower" width="130" height="120" /></a>
		<a href="images/images.jpg" rel="lightbox-gallery" title="Flower"><img src="images/images.jpg" alt="Flower" width="130" height="120" /></a>
		<a href="images/images (60).jpg" rel="lightbox-gallery" title="Flower"><img src="images/images (60).jpg" alt="Flower" width="130" height="120" /></a><a href="images/Galavasthi-240x150.jpg" rel="lightbox-gallery" title="Flower"></a>
		<a href="images/Galavasthi-240x150.jpg" rel="lightbox-gallery" title="Flower"></a>		</p>
                            <p>&nbsp;</p>
                   	  </div>
			  </div><!-- End Of Right Bottom Section -->
                    <div class="cleaner"></div>	
</div><!-- End Of Right -->
                
</div><!-- End Of content -->
            <div class="templatemo_bottom_panel_section" style="position:absolute;top:1031px;right:100px">
              <div class="cleaner"> <p align="center">&nbsp;</p>
                <p align="center"><a href="index.php">Home</a> | <a href="usergallery.php">Gallery</a> | <a href="userservice.html">services</a> | <a href="userfeed.php">feedback</a> | <a href="userlog.php">Login</a>| <a href="userabout.html">About</a> </p>
                </p>
           	    <marquee>
           	    Copyright © 2048 <a href="#">Kerala Ayurveda </a> | Designed by Students, Sree Rama Govt. Polytechnic College
           	    </marquee>
<p>
            	  
       
           	  </p></div>
                <!--  Free CSS Templates by TemplateMo.com  -->
            
            
</div><!-- End Of container -->
<div align=center></div>
</body>
</html>