<html>
<head>
</head>
<body>
<form method="post" name="medicinestock">
<table width="400" border="0">
  <tr>
    <th width="124" scope="row">medicineid</th>
    <td width="20">:</td>
    <td width="242">            <label>
      <input type="text" name="smid" />
    </label></td>
  </tr>
  <tr>
    <th scope="row">medicinename</th>
    <td>:</td>
    <td>
      <label>
      <input type="text" name="smn" />
      </label></td>
  </tr>
  <tr>
    <th scope="row">medicinedescription</th>
    <td>:</td>
    <td>
      <label>
      <textarea name="smd"></textarea>
      </label>       </td>
  </tr>
  
  <tr>
    <th scope="row">stock</th>
    <td>:</td>
    <td>
      <label>
      <input type="text" name="sms" />
      </label>           </td>
  </tr>
  <tr>
    <th scope="row">price</th>
    <td>:</td>
    <td>
      <label>
        <input type="text" name="smp" />
        </label>		</td>
  </tr>
</table>
    <input name="submit" type="submit" value="submit" />
	<?php
		if(isset($_POST['submit']))
		{
			include "connect.php";
			if(!$con)
			{
				echo "not connected";
			}
			$id=$_POST['smid'];
			$name=$_POST['smn'];
			$des=$_POST['smd'];
			$stock=$_POST['sms'];
			$price=$_POST['smp'];
	$query="insert into stock values($id,'$name','$des',$stock,$price)";
	echo $query;
	mysql_query($query);
	}
			?>
		</form></div>
</body>
</html>
