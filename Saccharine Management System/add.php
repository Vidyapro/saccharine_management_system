<?php

include("config.php");

if(!empty($_POST)) {
	$sid=$_POST['sid'];
	$sname=$_POST['sname'];
	$stype=$_POST['stype'];
	$quantity=$_POST['quantity'];
	$sprice=$_POST['sprice'];
	
	$sql="INSERT INTO sweets(sid,sname,stype,quantity,sprice) VALUES('$sid','$sname','$stype','$quantity','$sprice')";
	if(mysqli_query($connection,$sql)) {
		echo " inserted successfully";
		exit ();
	}
	else{
		echo "not inserted";
        exit ();
	}
	
}
?>