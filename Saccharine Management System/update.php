
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
			</ul>
			</div>
			</div>
		<div class="sweet">

 		
<?php
include("config.php");
$i=1;
if(isset($_POST['status'])) {
$status=$_POST['status'];	
	
$i--;


if(isset($_GET['update'])) {

	$update_dno=$_GET['update'];
	$sql="update delivery set status='$status' where dno='$update_dno'";
	$records=mysqli_query($connection,$sql);
	if($records){
	echo '<script language="javascript">alert("status successfully updated");
			location="viewdel.php";
			</script>';
		
	
	}
else { echo '<script language="javascript">alert("status not updated");
			location="viewdel.php";
			</script>';
		 }
}
}
?>
		
		<div class="add">
		<form action="" method="post">
	<div class="addd">
		</div>
	
     <div>
    <input type="text" placeholder="Delivery Status" name="status" required>


 </div>

	
<div class="but">   <button type="submit">Update</button>
  <button type="reset" value="reset">Reset </button>

 </div> </form>
		</div>
		
		</div>	
		</div>
	</body>	
	
</html>