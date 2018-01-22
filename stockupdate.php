<html>
<head>
</head>
<body>
<form method="post"  name="form1" id="form1">
 <?php
			include 'connect.php';
			$query=mysql_query("select * from stock where medicineid=".$_GET["id"]);
			while($r=mysql_fetch_array($query))
			{
			$id=$r['medicineid'];
			$name=$r['medicinename'];
			$des=$r['medicinedescription'];
			$stock=$r['stock'];
			$price=$r['price'];
			}
?>


<p>STOCK UPDATION</p>

<table width="374" border="0">
 <tr>
    <td height="36">Medicine Id</td>
    <td>:
      <label></label></td>
    <td><label>
      <input type="text" name="medicineid" value='<?php echo $id?>'/>
      </label>    </td>
  </tr>
  <tr>
    <td height="36">Medicine Name</td>
    <td>:
      <label></label></td>
    <td><label>
      <input type="text" name="medicinename" value='<?php echo $name ?>'/>
      </label>    </td>
  </tr>
  <tr>
    <td height="36">Medicine Description</td>
    <td>:
      <label></label></td>
    <td><label>
      <input type="text" name="medicinedescription" value='<?php echo $des ?>'/>
      </label>    </td>
  </tr>
   <tr>
    <td height="36">Stock</td>
    <td>:
      <label></label></td>
    <td><label>
      <input type="text" name="stock" value='<?php echo $stock ?>'/>
      </label>    </td>
  </tr>
   <tr>
    <td height="36">Price</td>
    <td>:
      <label></label></td>
    <td><label>
      <input type="text" name="price" value='<?php echo $price ?>'/>
      </label>    </td>
  </tr>
</table>
<label></label>
  <label></label>
  <label></label>
  <input type="submit" name="submit2"  />
  <?php
if(isset($_POST['submit2']))
		{
			include "connect.php";
			if(!$conn)
			{
				echo "not connected";
			}
			$id=$_POST['medicineid'];
			$name=$_POST['medicinename'];
			$des=$_POST['medicinedescription'];
				$stock=$_POST['stock'];
				$quantity=$_POST['quantity'];
		$price=$_POST['price'];
	$query="UPDATE stock set medicinename='$name',medicinedescription='$des',stock='$stock',price='$price' WHERE medicineid=$id";
	
	mysql_query($query);
Header("Location:hospitalstockview.php");
}

?>
</form>

</div>
</body>
</html>
