
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
			<li><a href="feed.php">Feedback</a> </li>
			</ul>
			</div>
			</div>
		<div class="sweet">

		<?php
session_start();
if ($_SESSION['user']) {
    
} else {
    header("location:indica.html");
}
$user = $_SESSION['user'];
include("config.php");
if(!empty($_POST)) {
	
	$sname=$_POST['sname'];
	$stype=$_POST['stype'];
	$quantity=$_POST['quantity'];
	$sprice=$_POST['sprice'];
	
	$sql="INSERT INTO sweet(sname,stype,quantity,sprice) VALUES('$sname','$stype','$quantity','$sprice')";
	if(mysqli_query($connection,$sql)) {
		echo '<script language="javascript">alert("Sweet added");</script>';} 
	else{
		echo '<script language="javascript">alert("sweet not added");</script>';
        
	}
	
}
?> 
		
		<div class="add">
		<form action="" method="post">
	<div class="addd">
		<ul>
					<li ><a href="admin_s.php">Add sweet</a> </li>
					
					
					<li><a href="viewsweet.php"> View sweet</a> </li> </ul></div>
	
     <div>
    <input type="text" placeholder="Sweet name" name="sname" required>


 </div>
<div><input type="text" placeholder="Sweet type" name="stype" required>


    </div>
<div><input type="text" placeholder="Quantity" name="quantity" required>



    </div>

	<div> <input type="text" placeholder="price per kg" name="sprice" required> </div>
<div class="but" style=" margin-left:110px;">   <button type="submit">Add</button>
  <button type="reset" value="reset">Reset </button>

 </div> </form>
		</div>
		
		</div>	
		</div>
	</body>	
	
</html>