
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
			<li id="firstlist"><a href="cust_s.php">Sweets </a> </li>
			<li><a href="addorder.php"> Order</a> </li>
			
			<li><a href="deliveryv.php"> Delivery </a> </li>
			<li><a href="myorder.php"> My orders </a> </li>
			<li><a href="feedback.php"> Feedback</a> </li>
			</ul>
			</div>
			</div>
		<div class="sweet">

		<!-- -->
		
		<div class="add">
	<div class="addd">
		<ul><li ><h3><a href="">Sweets Available</a></h3> </li>
					 </ul></div>
			<div class="views">
<?php
session_start();
if ($_SESSION['user']) {
    
} else {
    header("location:indica.html");
}
$user = $_SESSION['user'];
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
if(mysqli_num_rows($records)>0)
{
	while($row=mysqli_fetch_array($records))
	{
		?>
		<tr>
		<td><?php echo $row["sid"];?></td>
		<td><?php echo $row["sname"];?></td>
		<td><?php echo $row["stype"];?></td>
		<td><?php echo $row["quantity"];?></td>
		<td><?php echo $row["sprice"];?></td>
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