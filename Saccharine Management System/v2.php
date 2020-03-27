<?php

	include("config.php");
	session_start();
if(isset($_POST['admin'])){
	$admin=$_POST['admin'];
	$password=$_POST['password'];
	$sql="SELECT * FROM admin where admin='".$admin."' and password='".$password."' limit 1";
	$records=mysqli_query($connection,$sql);
	 
	if(mysqli_num_rows($records)==1){
	
					$_SESSION['user'] = $admin;
					
				
		echo '<script language="javascript">alert("you have successfully logged in");
			location="admin_s.php";
			</script>';
		
	}
	else{
		echo '<script language="javascript">alert("invalid user id or name");
			location="admin.html";
			</script>';

	}
}
?>	