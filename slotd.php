<?php

$fdate="";
$tdate="";
$db = mysqli_connect('localhost', 'root', '', 'duty');

// $jon1 =" SELECT f.name  FROM `faculty` AS f INNER JOIN `slots_availability` AS s ON f.faculty_id = s.slots_id";
// $jon = mysqli_fetch_assoc($jon1);
// echo $jon[f.name];


if(!$db){
  echo "Error";
}
	$fdate=$_POST['fdate'];
	$fdate2=date_create($fdate);
    $fdate= date_format($fdate2,"y-m-d");
	$tdate=$_POST['tdate'];
	$tdate2=date_create($tdate);
    $tdate= date_format($tdate2,"y-m-d");
	
$sql=" insert into slotd ( fdate , tdate) values ('$fdate','$tdate')";

if (mysqli_query($db, $sql)) 
{
	header('location:exam.php');
    echo "Successful..!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

mysqli_close($db);
?>
