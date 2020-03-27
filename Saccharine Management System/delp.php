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
	<ul> <li> <h3 style="line-height:80px;color: white; margin-left:70px; font-family: comic sans ms;"> Enter your order no to get delivery details</h3> </li> </ul> 
		

	<div> <input type="text" placeholder="Order id" name="oid" required> </div>
<div class="but">   <button type="submit" style="margin-left: 250px;">Submit</button>
  
 </div> </form>
		
			<div class="views">
<?php
include("config.php");
if(!empty($_POST)) {
	
	$oid=$_POST['oid'];

$sql="  select d.*,cname,phone,sname,pamt from customer c,delivery d,sweet s,payment p,orders o where d.payno=p.payno and p.oid=o.oid and o.sid=s.sid and c.cid=d.cid and d.payno in (select payno from orders o,payment p where o.oid=p.oid and p.oid='$oid')";

$records=mysqli_query($connection,$sql);
}
if(mysqli_num_rows($records)==1)
{
	while($row=mysqli_fetch_array($records))
	{
		?>
<!DOCTYPE html>
<html>
<head>
<link href='style.css' type='text/css' rel='stylesheet'>
</head>
<body>
	<div class="flow">
	<div class="flowl">
		<h3>Delivery no : <br>Name:  <br> Delivery date : <br> Delivery place : <br>Mobile: <br>Sweet: <br>Amount: <br> Cust id:	
			
			<br> Delivery Status:
	</div>	
	<div class="flowr">
		<?php echo $row["dno"];?>
		<br><?php echo $row["cname"];?>
		<br><?php echo $row["deldate"];?>
		<br><?php echo $row["dplace"];?>
		<br><?php echo $row["phone"];?>
		<br><?php echo $row["sname"];?>
		<br><?php echo $row["pamt"];?>
		<br><?php echo $row["cid"];?>
		<br><?php echo $row["status"];?>
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