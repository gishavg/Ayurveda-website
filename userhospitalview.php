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
.style6{color:#FFFFFF}
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
                        	<div class="templatemo_post_area">
                            	<div> 
	  <form  name="frm" method="post"  enctype="multipart/form-data" >
                 <table border="0" >
                 <font color="#000000">
				<?Php
			 
				 include'connect.php';
				 $s=mysql_query("select * from hospitalregistration where hospitalid=$_GET[id]");
				 echo "<tr>";
				 while($r=mysql_fetch_array($s))
				 {
				    echo "<tr><th><h1>".$r["hospitalname"]."</h1></th></tr>";
					echo "<td><img src='".$r["hospitalpicture"]."' alt='Slider 02' width='400' height='300' /></td>";
					echo "<TR><td>"." ADDRESS: "." ".$r["hospitaladdress"]." </td></TR>	";
					echo "<td>"." LOCATION: "." ".$r["hospitallocation"]." </td>";
				    echo "<TR><td>"."  PHNO.1"." ".$r["phno1"]." </td></TR>";
					echo "<td>"."  PHNO.2"." ".$r["phno2"]." </td>";
					echo "<TR><td>"."EMAILID :"." ".$r["hospitalemailid"]." </td></TR>";
					echo "<TR><td>"."WEBSITE :"." ".$r["hospitalwebsite"]." </td></TR>";
					echo "<TR><td>"."FOOD TYPE :"." ".$r["foodtype"]." </td></TR>";
					echo "<TR><td>"."ENVIRONMENTAL DETAILS:"." ".$r["environmentaldetails"]." </td></TR>";
					echo "<TR><td>"."RESPONSIBLE PERSON :"." ".$r["responsibleperson"]." </td></TR>";
					echo "<TR><td>"."RESPONSIBLE PERSON PHNO. :"." ".$r["responsiblepersonphno"]." </td></TR>";
					echo "<TR><td>"."RESPONSIBLE PERSON EMAILID :"." ".$r["responsiblepersonemailid"]." </td></TR>";
				
			
				}
				echo "</tr>";
		?>	
		</font>
		</table>
	</form>
		</div>                       	  </div>
							
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
                <p align="center"><a href="index.php">Home</a> | <a href="usergallery.php">Gallery</a> | <a href="userservice.html">services</a> | <a href="userfeed.php">feedback</a> | <a href="userlog.php">Login</a>| <a href="userabout.html">About</a> |<a href="usercontact.html"> Contact Us </a></p>
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