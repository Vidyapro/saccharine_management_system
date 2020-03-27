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
					<li ><h3 ><a href="">Feedback</a> </h3></li>
					
					
					 </ul></div>
	<div class="views">

<?php

include("config.php");

$result=mysqli_query($connection,"SELECT f.*,cname,sname FROM feedback f,customer c,orders o,sweet s where f.cid=c.cid and o.oid=f.oid and o.sid=s.sid");


?>
<table margin="20px" width="600" border="1" cellpadding="1" cellspacing="1">
<tr>
<th>Customer id</th>
<th>Customer name</th>
<th>Order id</th>
<th>Sweet</th>
<th>Rating</th>
<th>Description</th>

<?php


while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
	$cid=$row['cid'];
	$cname=$row['cname'];
	$oid=$row['oid'];
	$sname=$row['sname'];
	$rating=$row['rating'];
	$description=$row['description'];
	
?>
<tr>
	<td><?php echo $row["cid"];?></td>
	<td><?php echo $row["cname"];?></td>
	<td><?php echo $row["oid"];?></td>
	<td><?php echo $row["sname"];?></td>
	<td><?php echo $row["rating"];?></td>
	<td><?php echo $row["description"];?></td>
	
</tr>
<?php	
}
?>
</div>		


		</div>
		
		</div>	
		</div>
	</body>	
	
</html>