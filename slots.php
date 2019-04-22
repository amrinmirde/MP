<?php
$frome_date=$to_date=$faculty_id=$staff_name="";

$conn=mysqli_connect('localhost','root','','duty');

if(!$conn){
	echo '<h1>Error</h1>';
}
    $frome_date=$_POST['from_date'];
	$frome_date2=date_create($frome_date);
    $frome_date= date_format($frome_date2,"d-m-y");
	$to_date=$_POST['to_date'];
	$to_date2=date_create($to_date);
    $to_date= date_format($to_date2,"d-m-y");
    $staff_name = $_POST['staff_name'];
    $sql = "SELECT faculty_id,user_name from faculty where type='Teaching'";
    $result=mysqli_query($conn,$sql);
      
    {
    	while($row=mysqli_fetch_assoc($result))
             
    //echo($row['user_name']);
    	 {
    		if($staff_name == $row['user_name']) {
                $faculty_id=$row['faculty_id'];
    		}
    	}
    }
    
 $sql=" insert into slots_availability ( frome_date , to_date , faculty_id )values('$frome_date', '$to_date' ,'$faculty_id')";

if (mysqli_query($conn, $sql)) 
{
   header('location: teach.php');
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
