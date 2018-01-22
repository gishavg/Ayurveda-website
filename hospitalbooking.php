<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	color: #0000FF;
	font-style: italic;
}
.style5 {font-family: Algerian}
.style7 {color: #0000CC; font-style: italic; font-weight: bold; }
.style8 {color: #004080}
.style10 {color: #400080}
.style12 {color: #400000}
.style13 {color: #400000; font-style: italic; }
-->
</style>
</head>

<body>
<?php
 include "connect.php";
?>
<form action="#" method="POST">
	<blockquote>
	<table width="677" height="408" border="0" bgcolor="#999999">
		<tr><td colspan="2">
	
 	 	<tr>
    		<td height="46" colspan="4"><div align="center" class="style1">
      			<h2 class="style5 style12">BOOK YOUR DOCTOR &amp; TIME HERE </h2>
    									</div></td>
	  </tr>
 	  <tr>
    		<td colspan="2">&nbsp;</td>
    		<td>&nbsp;</td>
    		<td>&nbsp;</td>
 	 </tr>
 	 <tr>
    		<td colspan="2"><h2 class="style13">Doctor Name </h2></td>
  		    <td width="50"><strong>:</strong></td>
   			<td width="297">
			<select name="dselect" class="style1" style="width:100px;" onchange="onSelectChange();">
     		<?php
					$query="select doctorusername,doctorname,status from doctorregistration where hospitalid='".$_GET['username']."'";
	 			  	$result=mysql_query($query);
	 	 			while($row=mysql_fetch_array($result))
	 			    {
	  						$st=$row['status'];
							if($st=="Currently present")
							{
	  	  							echo "<option value=$row[doctorusername]>$row[doctorname]</option>";
		 				    }
		  
	 				 }
		 
	 		 ?>
       	 </select>
         <label>
         <input type="submit" name="Submit2" value="View Doctor Schedule" />
         </label></td>
    </tr>
    <tr>
             <td>
                    <?php
                             if(isset($_POST["Submit2"]))
                             {
                                      include "patientscheduleview.php";
	                         }
                     ?>
             </td>
    </tr>
    <tr>
                <td colspan="2">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
  </tr>
  <tr>
                <td colspan="2">&nbsp;</td>
                 <td>&nbsp;</td>
                <td>&nbsp;</td>
  </tr>
  <tr>
               <td colspan="2"><h2 class="style13">Requested Date </h2></td>
               <td><strong>:</strong></td>
                <td><input name="rdate" type="date" class="style1" value='<?php if(isset($_POST["display"])) echo $_POST["rdate"];?>' /></td>
  </tr>
  <tr>
               <td width="304" height="65"><div align="center" class="style7">
               <h2 align="left" class="style12">Select Section </h2>
                                           </div></td>
               <td width="8">&nbsp;</td>
               <td height="65"><strong>:</strong></td>
               <td height="65"><div align="center">
               <p align="left" class="style8">
	                      <?php $sesion=""; $time="" ; 
	                              if(isset($_POST["display"]))
		                          {
				                            $sesion=$_POST["am"]; 
											 echo $sesion;
										      if($sesion==NULL)
	          								 {
		               							  echo "<script> alert('Please select AM or PM')</script>";
		
	           								}
										
		                          }
								  
		                  ?>
                         <input name="am" type="radio" value="AM" checked="checked" <?php if($sesion=="AM") echo "checked"; ?> />
                         <span class="style10">AM
                         <input name="am" type="radio" value="PM"  <?php if($sesion=="PM") echo "checked"; ?>/>
                         PM</span></p>
                                </div>
	          </td>
  </tr>
  <tr>
                        <td height="57" colspan="4"><div align="center">
                        <input name="display" type="submit" class="style7" value="Select Time" />
                                                   </div></td>
  </tr>
  <?php 
  if($sesion!=NULL)
  {  
	 $m=date("20y-m-d");
	 if(isset($_POST["display"]))
	 {
		 $morning=$evening=$mornigto=$eveningto="";
		 $tempDate = $_POST["rdate"];
    	 $dw= date('l', strtotime( $tempDate));
		 if($tempDate<=$m)
		 {
		 	    echo '<script language="JavaScript" type="text/javascript">alert("Please select valid date ");</script>';
		 }
		 else
		 {
		         $query="select morning,evening,morningto,eveningto from doctorschedule where doctorusername='".$_POST["dselect"]."'  and opname='$dw' ";
    	         $n=mysql_query($query);
		         $count=0;
		         while($row=mysql_fetch_array($n))
		         {
	 	                  $morning=$row["morning"];
   	                      $evening =$row["evening"];
	                      $mornigto=$row["morningto"];
	                      $eveningto=$row["eveningto"];
	             }
	             if($_POST["am"]=="PM" )
	             {
		                   if($evening==NULL)
      	                   {
	   		                        echo "<script> alert('Doctor not available in the evening session')</script>";
	                       }
		                   else
	                       {
	                               $query="select * from doctorallocation where hospitalid='".$_GET["username"]."' and doctorusername= '".$_POST["dselect"]."' and  requesteddate='".$_POST["rdate"]."'";
	
	                               $result=mysql_query($query);
	                               $i=0;
	                               while($row=mysql_fetch_array($result))
	                               {
	  	                                    $days[$i]=$row["allocationtime"];
		                                    $i=$i+1;
	                               }
	                               echo "<tr><td> Evening Time</td><td><select name=eveningtime> ";
	                               for($k=$evening;$k<=$eveningto;$k++)
	                               {
	                                           $t=($k).".00 PM";
	 	                                       $f=0;
		                                       for($j=0;$j<$i;$j++)
		                                       {
		                                           if($t==$days[$j])
		                                           { 
		                                                $f=1;
		                                           }
		                                       }
	
		                                       if($f==0)
	  	                                              echo "<option>$t</option>"; 
		
	                                           $t=($k+.15)." PM";
	 	                                       $f=0;
		                                       for($j=0;$j<$i;$j++)
		                                       {
		                                                if($t==$days[$j])
		                                                $f=1;
		                                       }
		                                       if($f==0)
	  	                                               echo "<option>$t</option>"; 
		
				                                $t=($k+.30)."0 PM";
	 	                                        $f=0;
		                                        for($j=0;$j<$i;$j++)
		                                       {
		                                              if($t==$days[$j])
		                                              $f=1;
		                                       }
		                                       if($f==0)
	  	                                              echo "<option>$t</option>"; 
		
		                                             $t=($k+.45)." PM";
	 	                                             $f=0;
		                                             for($j=0;$j<$i;$j++)
		                                             {
		                                                      if($t==$days[$j])
		                                                      $f=1;
		                                             }
		                                             if($f==0)
	  	                                                       echo "<option>$t</option>"; 
	                                     }
	                                   echo "</select></td>";
	                        }
	
	         }
	
             else if($_POST["am"]=="AM")
	         {
	               if($morning==NULL)
      	            {
	   		                 echo "<script> alert('Doctor not available in the morning session')</script>";
	  	            }
		       else
		       {
	 		              $query="select * from doctorallocation where hospitalid='".$_GET["username"]."' and doctorusername= '".$_POST["dselect"]."' and  requesteddate='".$_POST["rdate"]."'";
	 		              //echo $query ."count".$count;
	 		              $result=mysql_query($query);
	 		              $i=0;
	 		              while($row=mysql_fetch_array($result))
	  		              {
	 	  	                        $days[$i]=$row["allocationtime"];
		                            $i=$i+1;
	  		              }
			              echo "<td><font face='Algerian'><strong><h2> Morning Time</h2></strong></font></td><td><select name=morningtime> ";
			              for($k=$morning;$k<=$mornigto;$k++)
			              {
	    		                    if($k==12)
		 		                	$t=($k).".00 PM";
		 		                    else
					                $t=($k).".00 AM";
	 			                    $f=0;
				                    for($j=0;$j<$i;$j++)
				                    {
					                        if($t==$days[$j])
					                        { 
		   				                             $f=1;
					                        }
				                    }
				                    if($f==0)
				  	                echo "<option>$t</option>"; 
				                    if($k==12)
						            $t=($k+.15)." PM";
					                else
	    				            $t=($k+.15)." AM";
	 				                $f=0;
					                for($j=0;$j<$i;$j++)
					                {
					                        if($t==$days[$j])
					                        $f=1;
					                }
					                if($f==0)
					  	            echo "<option>$t</option>"; 
				
					                if($k==12)	
						            $t=($k+.30)."0 PM";	
					                else
						            $t=($k+.30)."0 AM";
					                $f=0;
					                for($j=0;$j<$i;$j++)
					                {
					                          if($t==$days[$j])
		     		                          $f=1;
					                }
					                if($f==0)
					  	            echo "<option>$t</option>"; 
		
					                if($k==12)
						            $t=($k+.45)." PM";
					                else
						            $t=($k+.45)." AM";
				 	                $f=0;
					                for($j=0;$j<$i;$j++)
					                {
					                      if($t==$days[$j])
					                      $f=1;
					                }
					                if($f==0)
				  	                echo "<option>$t</option>"; 
	                        }
	              }
	           echo "</select></td></tr>";
	           }
	            else if($sesion==NULL)
	           {
		                 echo "<script> alert('Please select AM or PM')</script>";
		
	           }
	}
	}
	
	}
	
	?>
	




	

<tr><td height="40" colspan="2"></select>

  <tr><td height="21" colspan="2"></td>
      <div align="center"></div>
	<tr><td colspan="2">&nbsp;</td></tr>
	<tr>
	  <td colspan="2">&nbsp;</td>
    </tr>
	<tr>
	  <td colspan="2"><div align="center">
	    <input name="Submit" type="submit" class="style7" value="Submit" />
      </div></td>
    </tr>
 </table>


</blockquote>
</form>



<?php

if(isset($_POST["Submit"]))
{ 
	$sesion=$_POST["am"]; 
	$dusername=$_POST['dselect'];
	$reqdate=$_POST['rdate'];
	if($sesion=='AM')
	{
        $time=$_POST['morningtime'];
	}
	else if($sesion=='PM')
	{
        $time=$_POST['eveningtime'];
	
	}
	

	$q=$_SESSION["userid"];
	
	$s=$_GET["username"];
	
 if($dusername==NULL || $reqdate==NULL || $_POST["am"]==NULL)
 {
 echo '<script language="JavaScript" type="text/javascript">alert("Booking is Failed");</script>';//Header("Location:'home page.php'");
 //
 }	
 else 
 {
 
  $query="insert into jayaayurveda.doctorallocation (hospitalid,doctorusername,requesteddate,allocationtime,patientid) values('$s','$dusername','$reqdate','$time','$q')";
 mysql_query($query);
 
  echo '<script language="JavaScript" type="text/javascript">alert("Booking is successfull");</script>';
 }
 
}

?>
</body>
</html>