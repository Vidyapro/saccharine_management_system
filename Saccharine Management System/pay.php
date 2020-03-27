
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
		<form action="addpay.php" method="post">
	<div class="addd">
		<?php
include("config.php");
$sql="select oid, (sprice*o.quantity) as pay from orders o,sweet s where s.sid=o.sid order by oid desc limit 1";
$records=mysqli_query($connection,$sql);

if(mysqli_num_rows($records)==1)
{
while($row=mysqli_fetch_array($records))
{
		?>
		<h3 style="color: white; margin-left:20px; font-family: comic sans ms;"> Your Order is placed with order id : <?php echo $row["oid"];?> </h3>
		<h3 style="color: white; margin-left:20px; font-family: comic sans ms;"> Please pay amount : <?php echo $row["pay"];?> </h3>
		<h3 style="color: white; margin-left:20px; font-family: comic sans ms;"> Orders without initiating payment will be canceled . <br> Enter payment mode.</h3>
		<?php
	}
}
?>

					</div>
		<div><input type="text" placeholder="Payment type" name="ptype" required>


    </div> 

<div class="but">   <button type="submit" >Add</button>
  <button type="reset" value="reset">Reset </button>

 </div> </form>
		</div>
		
		</div>	
		</div>
	</body>	
	
</html>