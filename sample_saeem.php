<?php
 $conn = mysqli_connect("localhost", "root", "","duty");
  
$sql = "select * from time_table";
$run=$conn->query($sql);
	
$num = mysqli_num_rows($run);
$row=mysql_fetch_array($run,MYSQLI_ASSOC);
 while($row = mysqli_fetch_array($run,MYSQLI_ASSOC))
 {
 	echo "saeem";

 }
?>
