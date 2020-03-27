<!DOCTYPE html>
<head>
	<title>sweet</title>
<link href='style.css' type='text/css' rel='stylesheet'>
<style> 
table{
margin-left: 30px;

color: white;

} 
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
		<div class="addd">
		<ul>
					<li ><h3 ><a href="">Customer Details</a> </h3></li>
					
					
					 </ul></div>
	<div class="views">

<?php

include("config.php");

$result=mysqli_query($connection,"SELECT * FROM customer");


?>
<table margin="20px" width="600" border="1" cellpadding="1" cellspacing="1">
<tr>
<th>Customer id</th>
<th>Name</th>
<th>Mobile</th>
<th>Address</th>
<th>Branch id</th>
<?php
$i=1;

while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
	$cid=$row['cid'];
	$cname=$row['cname'];
	$phone=$row['phone'];
	$address=$row['address'];
	$sid=$row['bid'];
?>
<tr>
	<td><?php echo $row["cid"];?></td>
	<td><?php echo $row["cname"];?></td>
	<td><?php echo $row["phone"];?></td>
	<td><?php echo $row["address"];?></td>
	<td><?php echo $row["bid"];?></td>
	<td><a href="delete.php?delete=<?php echo $cid;?>">delete</a></td>
</tr>
	
<?php
$i--;
}
if(isset($_GET['delete'])) {
	$delete_cid=$_GET['delete'];
	
	mysqli_query($connect,"DELETE FROM customer where cid='$delete_cid'");
	
}
?>
</div>		


		</div>
		
		</div>	
		</div>
	</body>	
	
</html>