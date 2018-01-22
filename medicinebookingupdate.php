<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-family: Algerian;
	font-weight: bold;
	font-style: italic;
	color: #0080C0;
}
.style2 {color: #800040}
.style4 {font-weight: bold; color: #0080C0; font-family: Algerian;}
.style5 {
	color: #008000;
	font-weight: bold;
}
.style9 {font-family: Algerian; font-weight: bold;}
-->
</style>
</head>

 <?php
	include "connect.php";
					   $query="select medicineid,medicinename,price,quantity from tempmedicinebooking where medicineid=".$_GET["id"];
	                   $result=mysql_query($query);
	                        while($row=mysql_fetch_array($result))
	                        {
		                                $medicinename=$row['medicinename'];
										
							        	//$price=$row['price'];
										$quantity=$row['quantity'];
										
	                       } 
	 ?>
	 
<body>
<form action="#" method="post" name="form2" id="form2">

<table width="418" height="425" border="0">
  <tr>
    <th colspan="4" scope="row"><h2 class="style1">MEDICINE BOOKING </h2>
      <p class="style4"> <input name="txtsearch" type="text" />
        <input name="btnsearch" type="submit" value="Search Medicine" />
      </p></th>
  </tr>
  <tr>
    <th height="44" scope="row"><div align="left" class="style5">
      <h3>Medicine Name </h3>
    </div></th>
    <td><strong>:</strong></td>
    <td><label>
      <input name="textfield" type="text" value="<?php echo $medicinename ?>" size="40" readonly="true" />
    </label></td>
    <td width="1" rowspan="3">&nbsp;</td>
  </tr>
  <tr>
    <th width="151" height="51" scope="row"><h3 align="left" class="style5">Quantity</h3></th>
    <td width="8"><h3><strong>:</strong></h3></td>
    <td width="240"><strong>
      
      <label></label>
    </strong>
      <input name="quantity" type="text" size="40" value=<?php echo $quantity ?> /></td>
    </tr>
  <tr>
    <th height="54" colspan="3" scope="row">
      <div align="center">
        <input name="update" type="submit" class="style4" value="Update" />
      </div></th>
    </tr>
  <tr>
    <td height="28" colspan="2">              </tr>
  
  
  <tr>
    <th height="65" colspan="3" scope="row"><div align="center">
      <input name="delete" type="submit" class="style4" value="Delete" />
    </div></th>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th height="76" colspan="3" scope="row"><input name="cancel" type="submit" class="style4" value="Cancel" /></th>
    <td>&nbsp;</td>
  </tr>
</table>
 <blockquote>
   <table width="436" height="46" border="0">
     <tr>
       <td width="422" height="42"><div align="center">
           <h3 class="style2">&nbsp;</h3>
		   
		 
				
				<!-- $s=mysql_query("select * from tempmedicinebooking "); 
				           while($r=mysql_fetch_array($s))
				           {
						   				 $id=$r['medicineid'];
					                     echo "<tr><td>".$r['medicinename']."</td>";
					                     echo "<td>".$r['quantity']."</td>";
										 echo "<td>".$r['price']."</td>";
										 $total=$r['price']*$r['quantity'];
										 echo "<td>" .$total. "</td>"; 
					                     echo "<td>".$r['bookingdate']."</td>";
								
					 
				}-->
			
  <?php
				
		 if(isset($_POST['update']))
			 {
				           $s=mysql_query("select price from tempmedicinebooking where medicineid=".$_GET["id"]); 
				           while($r=mysql_fetch_array($s))
				           {
						   		$price=$r['price'];
						   }
						    $quantity=$_POST['quantity'];
						   $total=$quantity*$price;
	                   $query="update tempmedicinebooking set quantity='$quantity',price='$total' where medicineid=".$_GET["id"];
					   mysql_query($query);
					   $query12="select hospitalusername from stock where medicineid=".$_GET["id"];
					   $r=mysql_query($query12);
					   while($ro=mysql_fetch_array($r))
				           {
						   		$user=$ro['hospitalusername'];
						   }
					  header("location:patientmedicinebooking.php?username=$user&ref=1");
			}
		    else  if(isset($_POST['delete']))
		     {
			 			$delete="delete from tempmedicinebooking where medicineid=".$_GET["id"];
						 mysql_query($delete);
						 session_start();
	                      $query19="select hospitalusername from stock where medicineid=".$_GET["id"];
					   $r=mysql_query($query19);
					   while($ro=mysql_fetch_array($r))
				           {
						   		$user=$ro['hospitalusername'];
						   }
	
					header("location:patientmedicinebooking.php?username=$user&ref=1");
			 }
			 else if(isset($_POST['cancel']))
			 {
			 			header("location:patientmedicinebooking.php?username='".$_GET["hospitalusername"]."'");
			 }			 
	?>
						  
</table>
           <p class="style2">&nbsp; </p>
       </div></td>
     </tr>
   </table>
 </blockquote>
<p>
 
</p>


 
</div>
<table width="435" border="0">
  <tr></tr>
</table>
</form>
<div id="search">
<table>
<tr>
  

  <th height="51" scope="row">&nbsp;</th>
  <td>&nbsp;</td>
    <td>
  
</body>
</html>


			




