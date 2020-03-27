<?php

include("config.php");
if(!empty($_POST)) {
	$cid=$_POST['cid'];
	$cname=$_POST['cname'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$bid=$_POST['bid'];
	
	$sql="INSERT INTO customer(cid,cname,phone,address,bid) VALUES('$cid','$cname','$phone','$address','$bid')";
	if(mysqli_query($connection,$sql)) {
		echo '<script language="javascript">alert("sign up sucessful");
	location="cust.html";
	</script>';
	
	}
	else{
		echo '<script language="javascript">alert("not signed up");
		location="signup.html";</script>';
    
	}
	
}
?>