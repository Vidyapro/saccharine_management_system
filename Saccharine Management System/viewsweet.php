
<!DOCTYPE html>
<head>
	<title>sweet</title>
<link href='style.css' type='text/css' rel='stylesheet'>


</style>

</head>
<body>
	
		<div class="bg">
		
			<div class="amenu">
			
				<div class="lmenu">
				<h1> Saccharine Management System </h1>
				</div>
			
				<div class="rmenu">
				<ul>
					<li ><a href="indica.html"> HOME</a> </li>
					
					
					<li><a href="b.php"> BRANCH</a> </li>
					<li> <a href="contact.html">CONTACT</a> </li>
					<li><a href="indica.html"> LOGOUT </a></li>
				</ul>	
				</div>
			</div>
			<div class="vmenu">
			<div class="limenu">
			<ul>
			<li id="firstlist"><a href="admin_s.php">Sweets </a> </li>
			<li><a href="delete.php"> Customers</a> </li>
			<li><a href="order.php"> Orders</a> </li>
			<li><a href="delivery.php"> Delivery </a> </li>
			<li><a href="feed.php"> Feedback </a> </li>
			</ul>
			</div>
			</div>
		<div class="sweet">

		<!-- -->
		
		<div class="add">
		<form action="" method="post">
	<div class="addd">
		<ul>
					<li ><h3 ><a href="admin_s.php">Add sweet</a> </h3></li>
					
					
					<li><h3 ><a href="viewsweet.php"> View sweet</a> </h3></li> </ul></div>
			<div class="views">
<?php
include("config.php");
$sql="SELECT * FROM sweet";

$records=mysqli_query($connection,$sql);
?>
<!DOCTYPE html>
<html>
<head>
<title>sweets</title>
<style> 
table{
margin-left: 30px;
color: white;

} 
</style>
</head>
<body>
<table margin="20px" width="600" border="1" cellpadding="1" cellspacing="1">
<tr>
<th>id</th>
<th>Name</th>
<th>Type</th>
<th>Quantity</th>
<th>Price per kg</th>
<?php
if(mysqli_num_rows($records)>1)
{
	while($row=mysqli_fetch_array($records))
	{
		?>
		<tr>
		<td style="border: 1px solid #ccc;"><?php echo $row["sid"];?></td>
		<td style="border: 1px solid #ccc;"><?php echo $row["sname"];?></td>
		<td style="border: 1px solid #ccc;"><?php echo $row["stype"];?></td>
		<td style="border: 1px solid #ccc;"><?php echo $row["quantity"];?></td>
		<td style="border: 1px solid #ccc;"><?php echo $row["sprice"];?></td>
		<?php
	}
}
?>

</table>
</body>
</html>

</div>		

 </form>
		</div>
		
		</div>	
		</div>
	</body>	
	
</html>