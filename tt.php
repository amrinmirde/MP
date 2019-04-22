<?php

session_start();
$conn=mysqli_connect('localhost','root','','duty');
if(!$conn){
  echo '<h1>Error</h1>';
}else
echo 'hiiii';

    if (isset($_POST['submit'])) 
//if ($_GET("submit")) 
    {

echo 'hiiii';
    $exam = $_POST['exam'];
    $date1=$_POST['date'];
    $sem=$_POST['sem'];
    $subject=$_POST['subject'];
    $time1=$_POST['time'];
    $session=$_POST['session'];
    $department=$_POST['department']; 
    //  $date2=date_create($date);
    // echo $date= date_format($date2,'d/m/y');
        
      //echo $date;
      } 
      //sizeof($tt_id)
// for ($i=0; $i <sizeof($subject); $i++) { 
  //$sql=" INSERT INTO time_table (exam,date,subject,time,session,sem,department) values('$exam[$i]','$date1[$i]','$subject[$i]','$time1[$i]','$session[$i]','$sem[$i]','$department[$i]') ";
 //echo $date;

$sql=" INSERT INTO time_table (exam,date,subject,time,session,sem,department) values('$exam','$date1','$subject','$time1','$session','$sem','$department') ";
if($sql)
echo 'doneee';
else
echo 'not done';
 


 if (mysqli_query($conn, $sql)) 
      {
         header("location: time_table.php"); 
     echo "New record created successfully";
      }
  else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
  
 mysqli_close($conn);

?>
