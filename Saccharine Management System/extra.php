<!DOCTYPE html>
<html>
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
			
			<li><a href="addorder.php"> Orders</a> </li>
			<li><a href="deliveryv.php"> Delivery </a> </li>
			<li><a href="myorder.php"> My orders </a> </li>
			
			<li><a href="feedback.php"> Feedback</a> </li>
			</ul>
			</div>
			</div>
		<div class="sweet">

		<!-- -->
		
		<div class="add">
		<form action="" method="post">
	<ul> <li> <h3 style="line-height:80px;color: white; margin-left:280px; font-family: comic sans ms;"> Order details</h3> </li> </ul> 
		

</form>
		
			<div class="views">
<?php
include("config.php");
$sql="select p.*,cname,phone,sname,c.cid,c.address from customer c,sweet s,payment p,orders o where p.oid=o.oid and o.sid=s.sid and c.cid=o.cid order by payno desc limit 1";

$records=mysqli_query($connection,$sql);

if(mysqli_num_rows($records)==1)
{
	while($row=mysqli_fetch_array($records))
	{ $payno=$row['payno'];
		?>
<!DOCTYPE html>
<html>
<head>
<link href='style.css' type='text/css' rel='stylesheet'>
</head>
<body>
	<div class="flow">
	<div class="flowl">
		<h3>Payment no :   <br>Payment type:    <br>Order id:    <br>Name:  <br> Delivery place : <br>Mobile: <br>Sweet:  <br> Cust id:	
			<br>Amount:
			
	</div>	
	<div class="flowr">
		<?php echo $row["payno"];?>
		<br><?php echo $row["ptype"];?>
		
		<br><?php echo $row["oid"];?>
		<br><?php echo $row["cname"];?>
		<br><?php echo $row["address"];?>
		<br><?php echo $row["phone"];?>
		<br><?php echo $row["sname"];?>
		<br><?php echo $row["cid"];?>
		<br><?php echo $row["pamt"];?> Congrats!!!<a href="discount.php?discount=<?php echo $payno;?>"> discount</a>
		
	</div>
	</div>
</body>
</html>	
<?php
	}
}
?>

</div>		
</div>
</div>
		
		
	</body>	
	</html>