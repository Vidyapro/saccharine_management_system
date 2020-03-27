<?php
include("config.php");
	session_start();
if(isset($_POST['cid'])){
	$cid=$_POST['cid'];
	$cname=$_POST['cname'];
	$sql="SELECT * FROM customer where cid='".$cid."' and cname='".$cname."' limit 1";
	$records=mysqli_query($connection,$sql);
	
	if(mysqli_num_rows($records)==1){
$_SESSION['user'] = $cid;
		echo '<script language="javascript">alert("you have successfully logged in");
			location="cust_s.php";
			</script>';
		
		
	}
	else{
		echo '<script language="javascript">alert("invalid user id or name");
			location="cust.html";
			</script>';
		
		

	}
}
?>	