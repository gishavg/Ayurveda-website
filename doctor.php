<html>
<head>
<style type="text/css">
<!--
.style1 {
	color: #008000;
	font-weight: bold;
	font-style: italic;
	font-size: 36px;
}
.style2 {color: #800000}
.style25 {
	color: #800000;
	font-size: 18px;
	font-weight: bold;
}
.style26 {font-size: 18px}
.style27 {color: #800000; font-size: 18px; }
.style28 {color: #FF0000}
.style29 {color: #FFFFFF}
-->
</style>
</head>

<body>
<form method="post" enctype="multipart/form-data" name="doctor">

<table width="495" border="0">
  <tr>
    <th height="29" colspan="3" scope="col"><h1 align="center" class="style1">DOCTOR REGISTRATION </h1></th>
  </tr>
  
  <tr>
    <td colspan="3"><h3 align="center" class="style2"><u>All fields marked with <span class="style28">*</span> are mandatory</u> </h3></td>
  </tr>
 
  <div>
  <tr>
    <td colspan="3"><h2><tt class="style2 style26">Personal Details.........</tt></h2></td>
    </tr>
  <tr>
    <td><span class="style29">Name</span><span class="style28">*</span></td>
    <td>:</td>
    <td><input type="text" name="dname"></td>
  </tr>
  <tr>
    <td><span class="style29">Age</span><span class="style28">*</span></td>
    <td>:</td>
    <td><input type="text" name="dage"></td>
  </tr>
  <tr>
    <td><span class="style29">Sex</span><span class="style28">*</span></td>
    <td>:</td>
    <td><p>
              <input type="radio" name="Gender" value="Male" checked>
              <span class="style29">Male</span><br>
        <input name="Gender" type="radio" value="female">
        <span class="style29">Female </span><br>
           
    </p></td>
  </tr>
  <tr>
    <td><span class="style29">Address</span></td>
    <td>: </td>
    <td><textarea name="dadd"></textarea></td>
  </tr>
  <tr>
    <td><span class="style29">Phone Number1</span><span class="style28">* </span></td>
    <td>:</td>
    <td><input type="text" name="dphno1"></td>
  </tr>
  <tr>
    <td><span class="style29">Phone Number2 </span></td>
    <td>:</td>
    <td><input type="text" name="dphno2"></td>
  </tr>
  <tr>
    <td><span class="style29">Email ID </span><span class="style28">* </span></td>
    <td>:</td>
    <td><input type="text" name="dmail"></td>
  </tr>
  </div>
  <div>
  <tr>
    <td colspan="3"><H2><tt class="style27">Educational Details........</tt></h2></td>
    </tr>
  <tr>
    <td><span class="style29">Qualification</span><span class="style28">*</span></td>
    <td>:</td>
    <td><input type="text" name="dq"></td>
  </tr>
  <tr>
    <td><span class="style29">specialization</span><span class="style28">*</span></td>
    <td>:</td>
    <td><select name="dselect" style="width:100px;">
      <option value="select">select</option>
      <option value="eye">eye</option>
      <option value="ear ">ear</option>
    </select></td>
  </tr>
  </div>
  <tr>
    <td colspan="3"><tt class="style25">User account  Details........</tt></td>
    </tr>
  <tr>
    <td><span class="style29">Username</span><span class="style28">*</span></td>
    <td>:</td>
    <td><input type="text" name="duser"></td>
  </tr>
  <tr>
    <td><span class="style29">Password</span><span class="style28">*</span></td>
    <td>:</td>
    <td><input type="password" name="dpass1"></td>
  </tr>
  <tr>
    <td>
      <p>
        <input type="submit" name="submit" value="SUBMIT">
      </p>     </td>
    <td>&nbsp;</td>
    <td><p>
      <input name="Submit2" type="reset" value="RESET">
    </p></td>
  </tr>
</table>
</form>
 <?php
 	if(isset($_POST['submit']))
	{
		include "connect.php";
		if(!$conn)
			{
			echo "not connected";
			}	
		
				$doname=$_POST['dname'];
				$doage=$_POST['dage'];
				$dogender=$_POST['Gender'];
				$doadd=$_POST['dadd'];
				$dophno1=$_POST['dphno1'];
				$dophno2=$_POST['dphno2'];
				$domail=$_POST['dmail'];
				$doq=$_POST['dq'];
				$doselect=$_POST['dselect'];
				$douser=$_POST['duser'];
				$dopass1=$_POST['dpass1'];
				/*$dvisit1=$_POST['dvisit1'];
				$dvisit2=$_POST['dvisit2'];
				$dvisit3=$_POST['dvisit3'];
				$dvisit4=$_POST['dvisit4'];
				$dvisit5=$_POST['dvisit5'];
				$dvisit6=$_POST['dvisit6'];
			 	$dvisit7=$_POST['dvisit7'];
				$visit=$dvisit1.",".$dvisit2.",".$dvisit3.",".$dvisit4.",".$dvisit5.",".$dvisit6.",".$dvisit7;
				if(isset($_POST['$dvisit1']))
				{
						$query2="insert into doctordays(username,day)values('$douser','$visit')";
						mysql_query($query2);
				}
				else if(isset($_POST['$dvisit2']))
				{
						$query3="insert into doctordays(username,day)values('$douser','$visit')";
						mysql_query($query3);
				}
				else if(isset($_POST['$dvisit3']))
				{
						$query4="insert into doctordays(username,day)values('$douser','$visit')";
						mysql_query($query4);
				}
				else if(isset($_POST['$dvisit4']))
				{
						$query5="insert into doctordays(username,day)values('$douser','$visit')";
						mysql_query($query5);
				}
				else if(isset($_POST['$dvisit5']))
				{
						$query6="insert into doctordays(username,day)values('$douser','$visit')";
						mysql_query($query6);
				}
				else if(isset($_POST['$dvisit6']))
				{
						$query7="insert into doctordays(username,day)values('$douser','$visit')";
						mysql_query($query7);
				}
				else
				{
						$query8="insert into doctordays(username,day)values('$douser','$visit')";
						mysql_query($query8);
				}
				
				*/
				$role="doctor";
		session_start();
			$query=	"insert into doctorregistration (hospitalid,doctorname,doctorage,doctorsex,doctoraddress,phoneno1,phoneno2,doctoremailid,doctorqualification,doctorspecialization,doctorusername,status) 
values('".$_SESSION["userid"]."','$doname',$doage,'$dogender','$doadd','$dophno1','$dophno2','$domail','$doq','$doselect','$douser','Currently present')";
	
	mysql_query($query);
	$query1="insert into login values('$douser','$dopass1','$role')";


mysql_query($query1);
header("location:hospitalviewdoctor.php");
}
	?>
</body>
</html>
