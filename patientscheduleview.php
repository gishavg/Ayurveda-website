<html>
<head>
<script>
function onSelectChange(){
 document.getElementById('doctorschedule').submit();
}
</script>
</head>
<body>
<form id="doctorschedule" method="post" style="background-color:#333333">
<table width="480" border="0">
  <tr>
    
     <!-- <select name="dselect" style="width:100px;" onChange="onSelectChange();">-->

	  <?php
	  $mo1=$mo2=$mo3=$mo4=$mo5=$mo6=$mo7=$ev1=$ev2=$ev3=$ev4=$ev5=$ev6=$ev7=$s1=$s2=$s3=$s4=$s5=$s6=$s7=$mo11=$mo22=$mo33=$mo44=$mo55=$mo66=$mo77=$ev11=$ev22=$ev33=$ev44=$ev55=$ev66=$ev77="";
	 

	  if(isset($_POST['dselect']))
{
 $query="select * from doctorschedule where doctorusername='".$_POST['dselect']."'";
 
 $result=mysql_query($query);
 
$count=mysql_num_rows($result);
if($count>0)
{

if($row=mysql_fetch_array($result))
  {
   $mo1=$row["morning"];
   $mo11=$row["morningto"];
   $ev1=$row["evening"];
      $ev11=$row["eveningto"];
   $s1=$row["scheduleid"];
  }
if($row=mysql_fetch_array($result))
  {
   $mo2=$row["morning"];
      $mo22=$row["morningto"];
   $ev2=$row["evening"];
      $ev22=$row["eveningto"];
     $s2=$row["scheduleid"];
  } 
if($row=mysql_fetch_array($result))
{
   $mo3=$row["morning"];
      $mo33=$row["morningto"];
   $ev3=$row["evening"];
      $ev33=$row["eveningto"];
   $s3=$row["scheduleid"];
   }
   if($row=mysql_fetch_array($result))
   {
   $mo4=$row["morning"];
      $mo44=$row["morningto"];
   $ev4=$row["evening"];
      $ev44=$row["eveningto"];
   $s4=$row["scheduleid"];
	}
   if($row=mysql_fetch_array($result))
   {
   $mo5=$row["morning"];
      $mo55=$row["morningto"];
   $ev5=$row["evening"];
      $ev55=$row["eveningto"];
   $s5=$row["scheduleid"];
   }
   if($row=mysql_fetch_array($result))
   {
   $mo6=$row["morning"];
      $mo66=$row["morningto"];
   $ev6=$row["evening"];
      $ev66=$row["eveningto"];
   $s6=$row["scheduleid"];
   }
   if($row=mysql_fetch_array($result))
   {
   $mo7=$row["morning"];
      $mo77=$row["morningto"];
   $ev7=$row["evening"];
      $ev77=$row["eveningto"];
   $s7=$row["scheduleid"];
	}
 $caption="Update";
 }
 else
 {
 $caption="Insert";
 }
   }

?>
<input type="hidden" name="s1" value="<?php echo $s1; ?>" />
<input type="hidden" name="s2" value="<?php echo $s2; ?>" />
<input type="hidden" name="s3" value="<?php echo $s3; ?>" />
<input type="hidden" name="s4" value="<?php echo $s4; ?>" />
<input type="hidden" name="s5" value="<?php echo $s5; ?>" />
<input type="hidden" name="s6" value="<?php echo $s6; ?>" />
<input type="hidden" name="s7" value="<?php echo $s7; ?>" /></td>
  </tr>
  
  <tr>
    <td width="120" rowspan="2"> </td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td width="172"><div align="center">Morning</div></td>
    <td width="174"><div align="center">Evening</div></td>
  </tr>
  <tr>
    <td>
      
Monday       </td>
    <td>  
        <div align="center">
           <input name="m1" type="text" value="<?php echo $mo1?>" size="3" readonly="true" />
          <input name="m11" type="text" value="<?php echo $mo11?>" size="3" readonly="true"  />  
        </div>      </td>
    <td>
      <div align="center">
        <input name="e1" type="text" value="<?php echo $ev1?>" size="3" readonly="true"/> 
		<input name="e11" type="text" value="<?php echo $ev11?>" size="3" readonly="true"/> 
      </div></td>
  </tr>
  <tr>
    <td>
      Tuesday     </td>
    <td><div align="center">
      <input name="m2" type="text" value="<?php echo $mo2?>" size="3" readonly="true"/>
      <input name="m22" type="text" value="<?php echo $mo22?>" size="3" readonly="true"/>
    </div>   </td>
    <td><div align="center">
      <input name="e2" type="text" value="<?php echo $ev2?>" size="3" readonly="true"/>
      <input name="e22" type="text" value="<?php echo $ev22?>" size="3" readonly="true"/>
    </div></td>
  </tr>
  <tr>
    <td>
      Wednesday</td>
    <td><div align="center">
      <input name="m3" type="text" value="<?php echo $mo3?>" size="3" readonly="true"/>
      <input name="m33" type="text" value="<?php echo $mo33?>" size="3" readonly="true"/>
    </div>   </td>
    <td><div align="center">
      <input name="e3" type="text" value="<?php echo $ev3?>" size="3" readonly="true"/>
	  <input name="e33" type="text" value="<?php echo $ev33?>" size="3" readonly="true"/>
    </div></td>
  </tr>
  <tr>
    <td>
      Thursday</td>
    <td><div align="center">
      <input name="m4" type="text" value="<?php echo $mo4?>" size="3" readonly="true"/>
      <input name="m44" type="text" value="<?php echo $mo44?>" size="3" readonly="true"/>
    </div>   </td>
    <td><div align="center">
      <input name="e4" type="text" value="<?php echo $ev4?>" size="3" readonly="true"/>
      <input name="e44" type="text" value="<?php echo $ev44?>" size="3" readonly="true"/>
    </div></td>
  </tr>
  <tr>
    <td>
Friday </td>
    <td><div align="center">
      <input name="m5" type="text" value="<?php echo $mo5?>" size="3" readonly="true"/>
      <input name="m55" type="text" value="<?php echo $mo55?>" size="3" readonly="true"/>
    </div>  </td>
    <td><div align="center">
      <input name="e5" type="text" value="<?php echo $ev5?>" size="3" readonly="true"/>
      <input name="e55" type="text" value="<?php echo $ev55?>" size="3" readonly="true"/>
    </div></td>
  </tr>
  <tr>
    <td>
      Saturday</td>
    <td><div align="center">
      <input name="m6" type="text" value="<?php echo $mo6?>" size="3" readonly="true"/>
      <input name="m66" type="text" value="<?php echo $mo66?>" size="3" readonly="true"/>
    </div>   </td>
    <td><div align="center">
      <input name="e6" type="text" value="<?php echo $ev6?>" size="3" readonly="true"/>
      <input name="e66" type="text" value="<?php echo $ev66?>" size="3" readonly="true"/>
    </div></td>
  </tr>
  <tr>
    <td>
      Sunday</td>
    <td><div align="center">
      <input name="m7" type="text" value="<?php echo $mo7?>" size="3" readonly="true"/>
      <input name="m77" type="text" value="<?php echo $mo77?>" size="3" readonly="true"/>
    </div>   </td>
    <td><div align="center">
      <input name="e7" type="text" value="<?php echo $ev7?>" size="3" readonly="true"/>
      <input name="e77" type="text" value="<?php echo $ev77?>" size="3" readonly="true"/>
    </div></td>
	<tr>
	<td colspan=2 align=center>&nbsp;</td>
  </tr>
  </table>

<?php


 	if(isset($_POST['insert']))
	{
	include "connect.php";
		if(!$conn)
			{
			echo "not connected";
			}
	 
			
				$m1=$_POST['m1'];
				$m2=$_POST['m2'];
				$m3=$_POST['m3'];
				$m4=$_POST['m4'];
				$m5=$_POST['m5'];
				$m6=$_POST['m6'];
				$m7=$_POST['m7'];
				$e1=$_POST['e1'];
				$e2=$_POST['e2'];
				$e3=$_POST['e3'];
				$e4=$_POST['e4'];
				$e5=$_POST['e5'];
				$e6=$_POST['e6'];
				$e7=$_POST['e7'];

				$m11=$_POST['m11'];
				$m22=$_POST['m22'];
				$m33=$_POST['m33'];
				$m44=$_POST['m44'];
				$m55=$_POST['m55'];
				$m66=$_POST['m66'];
				$m77=$_POST['m77'];
				$e11=$_POST['e11'];
				$e22=$_POST['e22'];
				$e33=$_POST['e33'];
				$e44=$_POST['e44'];
				$e55=$_POST['e55'];
				$e66=$_POST['e66'];
				$e77=$_POST['e77'];
				$doselect=$_POST['dselect'];
				ECHO $_POST['insert'];
				if(trim($_POST['insert'])=="Insert")
	            {
				echo '<script language="JavaScript" type="text/javascript">alert("INSERTED SUCCESFULLY");</script>';//Header("Location:'home page.php'");
						$query2="insert into doctorschedule(doctorusername,opname,morning,evening,morningto,eveningto)values('$doselect','Monday','$m1','$e1','$m11','$e11')";
						mysql_query($query2);
				
			
			
						$query3="insert into doctorschedule(doctorusername,opname,morning,evening,morningto,eveningto)values('$doselect','Tuesday','$m2','$e2','$m22','$e22')";
						mysql_query($query3);
			
			
						$query4="insert into doctorschedule(doctorusername,opname,morning,evening,morningto,eveningto)values ('$doselect','Wednesday','$m3','$e3','$m33','$e33')";
						mysql_query($query4);
			
						$query5="insert into doctorschedule(doctorusername,opname,morning,evening,morningto,eveningto)values ('$doselect','Thursday','$m4','$e4','$m44','$e44')";
						mysql_query($query5);
				
						$query6="insert into doctorschedule(doctorusername,opname,morning,evening,morningto,eveningto) values ('$doselect','Friday','$m5','$e5','$m55','$e55')";
						mysql_query($query6);
				
						$query7="insert into doctorschedule(doctorusername,opname,morning,evening,morningto,eveningto)values ('$doselect','Saturday','$m6','$e6','$m66','$e66')";
						mysql_query($query7);
				     	$query8="insert into doctorschedule(doctorusername,opname,morning,evening,morningto,eveningto)values ('$doselect','Sunday','$m7','$e7','$m77','$e77')";
						mysql_query($query8);
				
				}
				else
				{
				ECHO "UPDATING";
				mysql_query("update doctorschedule set morning='$m1' , evening='$e1',morningto='$m11' , eveningto='$e11' where scheduleid=$s1");
				mysql_query("update doctorschedule set morning='$m2' , evening='$e2',morningto='$m22' , eveningto='$e22' where scheduleid=$s2");
				mysql_query("update doctorschedule set morning='$m3' , evening='$e3',morningto='$m33' , eveningto='$e33' where scheduleid=$s3");
				mysql_query("update doctorschedule set morning='$m4' , evening='$e4',morningto='$m44' , eveningto='$e44' where scheduleid=$s4");
				mysql_query("update doctorschedule set morning='$m5' , evening='$e5',morningto='$m55' , eveningto='$e55' where scheduleid=$s5");
				mysql_query("update doctorschedule set morning='$m6' , evening='$e6',morningto='$m66' , eveningto='$e66' where scheduleid=$s6");
     			mysql_query("update doctorschedule set morning='$m7' , evening='$e7',morningto='$m77' , eveningto='$e77' where scheduleid=$s7");
				
				}
				
}
?>
</form>	

</body>
</html>
