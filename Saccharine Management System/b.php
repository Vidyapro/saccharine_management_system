<!DOCTYPE html>
<html>
<head>
<title>Saccharine Management System</title>
<link href='style.css' type='text/css' rel='stylesheet'>
</head>
<body>
<div class="back">		
<div class="img5">
<div class="con">
<?php
$sql="SELECT * FROM branch";
$connect=mysqli_connect("localhost","root","","saccharine");
$records=mysqli_query($connect,$sql);
?>

<table width="600" border="2" cellpadding="1" cellspacing="1">
<tr>
<th>Branch id</th>
<th>Branch location</th>
<?php
if(mysqli_num_rows($records)>1)
{
	while($row=mysqli_fetch_array($records))
	{
		?>
		<tr>
		<td><?php echo $row["bid"];?></td>
		<td><?php echo $row["blocation"];?></td>
		<?php
	}
}
?>

</table></div>
	</div>
</div>	
			

   <div class="container">
  
 <div class="log"> 

 </div>



</div>
</div>

</body>
</html>