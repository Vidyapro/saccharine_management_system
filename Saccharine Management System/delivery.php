
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
			<li><a href="feed.php">Feedback </a> </li>
			</ul>
			</div>
			</div>
		<div class="sweet">

		<?php

include("config.php");

if(!empty($_POST)) {
	
	
	$deldate=  $_POST['deldate'];
	$payno=$_POST['payno'];
	
	
	$sql="INSERT INTO delivery(deldate,payno,status) VALUES('$deldate','$payno','waiting')";
	if(mysqli_query($connection,$sql)) {
		echo '<script language="javascript">alert("delivery initiated");</script>';} 
	else{
		echo '<script language="javascript">alert("delivery not initiated");</script>';
        
	}
	
}
?> 
		
		<div class="add">
		<form action="" method="post">
	<div class="addd">
<ul>
					<li ><a href="delivery.php">Add </a> </li>
					
					
					<li><a href="viewdel.php"> View </a> </li> </ul>
		</div>

	
<div><input type="text" placeholder="Delivery date" name="deldate" required>


    </div>
<div><input type="text" placeholder="Payment no" name="payno" required></div>

<div class="but" style=" margin-left:110px;">   <button type="submit">Add</button>
  <button type="reset" value="reset">Reset </button>

 </div> </form>
		</div>
		
		</div>	
		</div>
	</body>	
	
</html>