
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

		<?php

include("config.php");
if(!empty($_POST)) {
	$cid=$_POST['cid'];
	$oid=$_POST['oid'];
	$rating=$_POST['rating'];
	$description=$_POST['description'];
	
	$sql="INSERT INTO feedback(cid,oid,rating,description) VALUES('$cid','$oid','$rating','$description')";
	if(mysqli_query($connection,$sql)) {
		echo '<script language="javascript">alert("submitted");</script>';
		
		}
	else{
		echo '<script language="javascript">alert(" not submitted");</script>';
        exit ();
	}
	
}
?> 
		
		<div class="add">
		<form action="" method="post">
	<div class="addd">
		
		<ul><li ><h3 style="color: white; line-height:100px; margin-left:-50px; font-family: comic sans ms;">Please give your valuable feedback</h3> </li>
					 </ul>
					</div>
		<div><input type="text" placeholder="Customer id" name="cid" required>


    </div> <div>
    <input type="text" placeholder="Order id" name="oid" required>


 </div>
<div><input type="text" placeholder="Rating out of 5" name="rating" required>



    </div>
<div><input type="text" placeholder="Write here" name="description" required>



    </div>

	
<div class="but">   <button type="submit" style=" margin-left: 150px; ">Add</button>
  <button type="reset" value="reset">Reset </button>

 </div> </form>
		</div>
		
		</div>	
		</div>
	</body>	
	
</html>