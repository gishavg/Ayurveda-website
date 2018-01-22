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
.style15 {
	color: #008000;
	font-style: italic;
	font-family: Algerian;
}
-->
</style>
</head>
<body>
<p>&nbsp;</p>

<div id="templatemo_container">
     
            <!--  Free CSS Templates by TemplateMo.com  -->
  <div id="temppatienthome" > 
			
			 <div>
              <h2 align="left"><span class="style7">
			  <a href="patienthome.php" class="selected"> Home </a> <span class="style8">"        "</span>
              <a href="patientgallary.php">Gallery </a> <span class="style8">"        "</span>
              <a href="patientservices.php">Services</a><span class="style8">"        "</span>
                <a href="patientfeed.php">Feedback</a><span class="style8">"        "</span>
                <a href="index.php">LogOut</a></span></h2>
            </div>    
			 <p>&nbsp;</p>
			 <p>&nbsp;</p>
			 <h1 class="style15"> SELECT YOUR FAVOURATE HOSPITAL HERE </h1>
  </div>
			<div style="position:absolute; top:1600px; left: 212px; width: 860px;">
					
			</div>
            <div id="templatemo_content">
              <div id="templatemo_content_left">
					<div id="templatemo_menu" align="left">
                   	  <ul class="style10" >
						  <li><a href="patientonlinequery.php">Online Query</a> </li>
                        <li><a href="patienthospitalview.php">Hospital Booking</a></li>
                        <li><a href="patientmedicineview.php">Medicine Booking </a></li>
                        <li><a href="patientviewdoctorallocation.php">View Hospitals </a></li>
                        <li><a href="patientviewbookingdetails.php">View Booking Details </a></li>
                   </ul>
                    </div>
			  </div>
				<!-- End Of Left -->
                <div id="templatemo_content_right">
    	            <div id="templatemo_content_right_bottom">
						<div id="templatemo_content_right_top">
                        	<div class="templatemo_post_area">
                            	<h1 class="style12">             		   	
     <form  name="frm" method="post"  enctype="multipart/form-data" >
                 <table align="center" border="0" width="300" bgcolor="#CCFF66" bordercolor="#00FFFF">
                 <caption align="top" style="background-color:#33FF99"><h1>Choose Your Favourate Hospital</h1></caption>
				
				<?Php
			 
session_start();
if($_SESSION['userid']){
 include'connect.php';
				 $s=mysql_query("select hospitalpicture,hospitalusername  from hospitalregistration where status='Accepted'");
				 echo "<tr>";
				 $i=0;
				 while($r=mysql_fetch_array($s))
				 {
				 		 if($i%3==0)
					 {
					 echo "</tr><tr>";
					 }
					 $i++;
				   		 echo "<tr><th>".$r["hospitalusername"]."</th></tr>";
					// echo "<td><img src='".$r['hospitalpicture']."' width=300 height=300></td>";
					$username=$r["hospitalusername"];
					  	
						echo "<td>";echo "<a href=patienthospitalbooking.php?username=".$r["hospitalusername"]."><img src='".$r['hospitalpicture']."' width=300 height=300></a>";echo "</td>";
				    echo "</tr>";		     
				 }
			
}
else
die("You must be logged in");
?>
				
		       
		</font>
		</table>
		
	</form></p>
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
                <p align="center"><a href="patienthome.php">Home</a> | <a href="patientgallary.php">Gallery</a> | <a href="patientservices.php">services</a> | <a href="patientfeed.php">feedback</a> | <a href="index.php">LogOut</a> </p>
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