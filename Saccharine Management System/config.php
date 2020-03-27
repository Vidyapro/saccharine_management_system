<?php 
   
   $connection = mysqli_connect('localhost', 'root', '') or die ("Unable to connect");
   $db = mysqli_select_db($connection, 'saccharine') or die ("Unable to connect the database"); 
   
?>