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
.style14 {color: #00CC00}
.style15 {color: #00FF40}
-->
</style>
</head>
<body>
<p>&nbsp;</p>

<div id="templatemo_container">
     
            <!--  Free CSS Templates by TemplateMo.com  -->
            <div id="templatemo_header">  <div>
               <h2 align="left"><span class="style7">
			  <a href="doctorhome.php" class="selected">Home </a> <span class="style8">"        "</span>
              <a href="doctorgallery.php">Gallery </a> <span class="style8">"        "</span>
              <a href="index.php">Logout</a> <span class="style8"> " </span>
              <a href="patientservices.php">Services</a><span class="style8">"        "</span>
                <a href="patientfeed.php">Feedback</a></span></h2>
               
            </div>    
						<marquee scrollamount="4" direction="down"><img src="images/SDD.jpg" /></marquee>     

            </div>
			
            <div id="templatemo_content">
            	
                <div id="templatemo_content_left">
					<div id="templatemo_menu" align="left">
                   	  <ul class="style10" >
                   	    <li><a href="doctorquery2.php">Online Query </a></li>
                   </ul>
                    </div>
				</div>
				<!-- End Of Left -->
                <div id="templatemo_content_right">
    	            <div id="templatemo_content_right_bottom">
						<div id="templatemo_content_right_top">
                       	  <div class="templatemo_post_area">
						<p>&nbsp;</p>
         	            <h1 class="style15">Accept / Regect the Booked Patient </h1>
         	            <p>&nbsp;</p>
         	 
		<?php
					 include'connect.php';
					 $ma=$_GET["id"];
				 $qu="select patientid,requesteddate from doctorallocation where patientid=".$_GET["id"];
				
				 $s=mysql_query('$qu');
				while($r=mysql_fetch_array($s))
				 {
				    $name=$r['patientid'];
					echo $name;
					$time=$r['allocationtime'];
					echo $time;
					}
					
				
		?>
         	 </table>                       	
         	 
                       	  <table width="400" border="0">
                            <tr>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                          </table>
                       	  
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