
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
		<form action=" " method="post">
	<div class="addd">
		<?php
$i=1;
if(!empty($_POST))
{

include("config.php");
$i--;


if(isset($_GET['discount'])) {

	$update_payno=$_GET['discount'];
	$color=$_POST['color'];

	
$sql=" CALL `discount`($update_payno,$color);";
$records=mysqli_query($connection,$sql);	
if($records)
{echo '<script language="javascript">alert("Congrats!!! discount is applied");
			location="extra1.php";
			</script>';
	}
else{echo '<script language="javascript">alert("discount not applied");
			
			</script>'; }	
	}
}
?>

					</div>
		

   <div style="color: white; margin-left:220px; line-height:40px; " ><input type="radio" value="1.1" name="color"  required>

 10% discount

    </div>

	<div style="color: white; margin-left:220px; line-height:40px; " ><input type="radio" value="1.2" name="color"  required>

 20% discount

    </div>

<div class="but">   <button type="submit" >Add</button>
  <button type="reset" value="reset">Reset </button>

 </div> </form>
		</div>
		
		</div>	
		</div>
	</body>	
	
</html>