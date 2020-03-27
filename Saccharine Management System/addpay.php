<?php

include("config.php");

if(!empty($_POST)) {
	$ptype=$_POST['ptype'];
	
	
	
	$sql="INSERT INTO payment(ptype) VALUES('$ptype')";
	 
		
	$records = mysqli_query($connection,$sql);
	
	if($records) {
	
	

		echo '<script language="javascript">alert("order placed sucessfully");
			location="extra.php";
			</script>';
		
}
		
	else{
		echo '<script language="javascript">alert("not sucessful");
			location="pay.php";
			</script>';
        exit ();
	}
	
}
?>