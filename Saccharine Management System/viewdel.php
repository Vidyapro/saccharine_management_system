
<!DOCTYPE html>
<head>
	<title>sweet</title>
<link href='style.css' type='text/css' rel='stylesheet'>


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
					<li ><a href="delivery.php">Add </a> </li>
					
					
					<li><a href="viewdel.php"> View </a> </li> </ul></div>
			<div class="views">
<?php
include("config.php");
$sql="select d.*,cname,phone from customer c,delivery d where c.cid=d.cid";

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
<th>dno</th>
<th>place</th>
<th>date</th>
<th>payno</th>
<th>cid</th>
<th>name</th>
<th>mobile</th>
<th>status</th>

<?php

if(mysqli_num_rows($records)>=1)
{
	while($row=mysqli_fetch_array($records))
	{	$dno=$row['dno'];
		?>
		<tr>
		<td><?php echo $row["dno"];?></td>
		<td><?php echo $row["dplace"];?></td>
		<td><?php echo $row["deldate"];?></td>
		<td><?php echo $row["payno"];?></td>
		<td><?php echo $row["cid"];?></td>
		<td><?php echo $row["cname"];?></td>
		<td><?php echo $row["phone"];?></td>
		<td><?php echo $row["status"];?></td>	
		<td><a href="update.php?update=<?php echo $dno;?>">update</a></td>	
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