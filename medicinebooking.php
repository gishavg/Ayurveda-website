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
	color: #FF00FF;
}
.style2 {color: #800040}
.style4 {font-weight: bold; color: #0080C0; font-family: Algerian;}
.style5 {color: #FF0080}
.style6 {color: #8000FF}
.style7 {
	color: #0000FF;
	font-weight: bold;
}
.style9 {
	color: #FF80C0;
	font-weight: bold;
}
.style10 {
	color: #FFFFFF;
	font-style: italic;
	font-family: Algerian;
}
-->
</style>
</head>
 <?php
	include "connect.php";
	           $str="select medicineid,medicinename from stock where hospitalusername='".$_GET['username']."' && stock>0";
	           $s=mysql_query($str);
			   $user=$_GET['username'];

 ?>
	 
<body>
<form action="#" method="post" name="form2" id="form2">
          <table width="559" height="345" border="0">
          <tr>
          <th colspan="4" scope="row"><h2 class="style1">MEDICINE BOOKING </h2>
          
		  </th>
          </tr>
          <tr>
          <th height="76" scope="row"><div align="left" class="style2">
          <h3 class="style7">MEDICINE NAME </h3>
          </div></th>
          <td><span class="style7">:</span></td>
          <td><select name="combo" class="style6">
          <?php
			               while($row=mysql_fetch_array($s))
	                       {
	                                    echo "<option value='$row[medicineid]'>$row[medicinename]</option>";
	                       }
		  ?>
          </select></td>
          <td width="1" rowspan="3">&nbsp;</td>
          </tr>
          <tr>
          <th width="234" height="44" scope="row"><h3 align="left" class="style7">QUANTITY</h3></th>
          <td width="17"><h3 class="style7">:</h3></td>
          <td width="289"><strong>
          <label></label>
          <input name="quantity" type="text" class="style6" value="" size="40" />
          </strong></td>
          </tr>
          <tr>
          <th height="50" colspan="3" scope="row">&nbsp;</th>
          </tr>
          <tr>
          <td height="2" colspan="2">  </tr>
          <tr>
          <th colspan="2" scope="row"><input name="save" type="submit" class="style4" value="Save" /></th>
          <td><div align="center">
          <input name="Submit3" type="submit" class="style4" value="Cancel" />
          </div>	</td>
          <td>&nbsp;</td>
          </tr>
  </table>
          <blockquote>
          <table width="771" height="50" border="0">
          <tr>
          <td width="510" height="42">
            <h2 align="center" class="style10">BOOKED MEDICINE </h2>
            <div align="center">
          <table border="5" align="center" bgcolor="#FFFFFF" width="500" height="133">
          <tr>
              <th height="119"> <span class="style5">MEDICINE NAME</span></th>
			  <th> <span class="style5">QUANTITY </span></th>
			  <th> <span class="style5">PRICE</span></th>
			  <th> <span class="style5">TOTAL</span> </th>
			  <th> <span class="style5">BOOKING DATE </span></th>
			  <th> <span class="style6">EDIT/DELETE</span></th>
	      </tr>
          <?php
		  if($_GET["ref"]==1)
		  {
		    
		  		  $s=mysql_query("select * from tempmedicinebooking "); 
				           while($r=mysql_fetch_array($s))
				           {
						   				 $id=$r['medicineid'];
					                     echo "<tr><td>".$r['medicinename']."</td>";
					                     echo "<td>".$r['quantity']."</td>";
										 echo "<td>".$r['price']."</td>";
										 $total=$r['price']*$r['quantity'];
										 echo "<td>" .$total. "</td>"; 
					                     echo "<td>".$r['bookingdate']."</td>";
										 echo "<td>";echo "<a href=patientmedicinebookingupdate.php?id=".$r['medicineid'].">Edit</a>";echo "</td>";
					 						//echo "<td>";echo "<input name="delete" type="submit" value="Delete" />";
										//	if(isset($_POST['delete']))
										//	{
										//			$del="delete from tempmedicinebooking where medicineid=$id";
										//			mysql_query($del);
										//	}
					                      echo "</td></tr>";
					       }
		 }
                 
	     if(isset($_POST['save']))
			     {
				       $medicineid=$_POST['combo'];
	                   $query="select medicineid,medicinename,price,stock from stock where medicineid=$medicineid";
	                   $result=mysql_query($query);
	                   while($row=mysql_fetch_array($result))
	                   {
		                        $medicinename=$row['medicinename'];
								$price=$row['price'];
								$stock=$row['stock'];
								
	                   } 
	                   $quantity=$_POST['quantity'];
	                   $bdate = date("Y-m-d");
					   $query1="select count(*) as count from tempmedicinebooking where medicineid=$medicineid";
					    $s1=mysql_query($query1); 
						$count=0;
				           while($r=mysql_fetch_array($s1))
				           {
						   $count=$r["count"];
						   
						   }
						   if($count>0)
						   {
						   echo '<script language="JavaScript" type="text/javascript">alert("YOU HAVE ALREADY BOOKED THIS MEDICINE, PLEASE UPDATE OR DELETE FROM THE LIST BELOW");</script>';
						   }
						   else
						   {
						   			if($quantity<=$stock)
									{
	                  						 $query="insert into tempmedicinebooking(medicineid,medicinename,quantity,price,bookingdate)                  values('$medicineid','$medicinename','$quantity','$price','$bdate')";
	                  							 mysql_query($query);
					  				
									 }
									 else
									 {
									 			 echo '<script language="JavaScript" type="text/javascript">alert("REQUIRED QUANTITY DOES NOT EXIST");</script>';
									 }
							}
	                      $s=mysql_query("select * from tempmedicinebooking "); 
				           while($r=mysql_fetch_array($s))
				           {
						   				 $id=$r['medicineid'];
					                     echo "<tr><td>".$r['medicinename']."</td>";
					                     echo "<td>".$r['quantity']."</td>";
										 echo "<td>".$r['price']."</td>";
										 $total=$r['price']*$r['quantity'];
										 echo "<td>" .$total. "</td>"; 
					                     echo "<td>".$r['bookingdate']."</td>";
										 echo "<td>";echo "<a href=patientmedicinebookingupdate.php?id=".$r['medicineid'].">Edit</a>";echo "</td>";
					 						//echo "<td>";echo "<input name="delete" type="submit" value="Delete" />";
										//	if(isset($_POST['delete']))
										//	{
										//			$del="delete from tempmedicinebooking where medicineid=$id";
										//			mysql_query($del);
										//	}
					                      echo "</td></tr>";
					       }
			      }
			 ?>
             </table>
            </div>
             <p align="center" class="style2">&nbsp;</p>
             <p align="center" class="style2"><span class="style9">TYPE OF PAYMENT</span><span class="style2">:</span>
             <select name="combo1" class="style7">
             echo "<option>Cash</option>";
             echo " <option>Cheque</option>";
             echo "<option>Installment</option>";
	         </select>
             </p>
             <p align="center" class="style2">&nbsp;</p>
             <p align="center" class="style2">
             <input name="submit" type="submit" class="style4" value="Confirm" />
             </p>
            </td>
            </tr>
            </table>
  </blockquote>
             <p>
             <?php
                       /*  if(isset($_POST['btnsearch']))
                           {
                                   $s=mysql_query("select * from hospitalregistration where username in (SELECT hospitalusername FROM  `stock` WHERE  `medicinename` LIKE '".$_POST['txtsearch']."'");
				                   $i=1;
				                   while($r=mysql_fetch_array($s))
				                   {
				                       if($i%3==0)
					                    {
					                                echo "</tr><tr>";
					                    }
					                    $i++;
					                    echo "<td>".$r['hopitalname']."</td>";
					                    echo "<td>".$r['hospitaladdress']."</td>";
					                    echo "<td>".$r['hopitallocation']."</td>";
					                    echo "<td>".$r['hospitalemailid']."</td>";
				                  }
				                    echo "</tr></table></div>";
		                  }
		              */
	                    ?>
            </p>

            <div align="left">
              <p>&nbsp;</p>
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

<?php
if (isset($_POST["submit"]))
{
				session_start();
				$qu="select patientname,patientid from patientregistration where patientusername='".$_SESSION['id']."'";
				
				$w=mysql_query($qu);
				while($ro=mysql_fetch_array($w))
								{
								$pname=$ro['patientname'];
								$pid=$ro['patientid'];
								
								}
					 $bookingid=1;
					 $query="select * from tempmedicinebooking " ;
					
					 $result=mysql_query($query);
					 $i=1;
								
								while($row=mysql_fetch_array($result))
								{
										$medicineid=$row['medicineid'];
										$medicinename=$row['medicinename'];
										$quantity=$row['quantity'];
										$typeofpay=$_POST['combo1'];
									
										$bdate = $row['bookingdate'];
										$pric=$row['price'];
										$total=$row['price']*$row['quantity'];
										 if($i==1)
										 {
												  $query="insert into medicinebooking(patientid,patientname,typeofpayment,bookingdate,hospitalusername,status) values('$pid','$pname','$typeofpay','$bdate','".$_GET['username']."','ordered')";
												  mysql_query($query);
												 
												  $i++;
												  $query="select max(medicinebookingid) as id from medicinebooking" ;
												  $se=mysql_query($query);
												  while($row1=mysql_fetch_array($se))
												  {
															   $bookingid= $row1["id"];
												  }
												
											 }
												  $query1="insert into booking(medicinebookingid,medicinename,quantity,price) values('$bookingid','$medicinename','$quantity','$total')";
										          mysql_query($query1);
										          $delete="delete from tempmedicinebooking";
												  mysql_query("$delete");
										  
													echo '<script language="JavaScript" type="text/javascript">alert("MedicineBooking has been successfully completed");</script>';				
				  
				 
					}
					}
	 ?>

			




