<?php
 include("style.php");
  $db = mysqli_connect('localhost','root','','duty');

#COMPUTER

$result3 = mysqli_query($db,"select exam,date,subject,session,time from time_table where department='Computer' and sem='III'");

$result4 = mysqli_query($db,"select exam,date,subject,session,time from time_table where department='Computer' and sem='IV'");

$result5 = mysqli_query($db,"select exam,date,subject,session,time from time_table where department='Computer' and sem='V'");

$result6 = mysqli_query($db,"select exam,date,subject,session,time from time_table where department='Computer' and sem='VI'");

$result7 = mysqli_query($db,"select exam,date,subject,session,time from time_table where department='Computer' and sem='VII'");

$result8 = mysqli_query($db,"select exam,date,subject,session,time from time_table where department='Computer' and sem='VIII'");

?>

<!DOCTYPE html>
<html>
<head>
  <title>Time_Table</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
   h3{
      margin-left: 550px;
      color: white;
    }

    h1,h2,th{
      color: white;
    }
    </style>
</head>

<body>
<fieldset>
<form action="" method="POST">
  <h3>Time Table</h3>
<div class="container-fluid">
  
          
      
<!-- COMPUTER-->

<div class="container-fluid">
  <h1>Computer</h1>
  <h2>SEM III</h2>
  
  <table class="table">
    <div class="col-sm-3">

    <thead>
    
      <tr>
        <th>Exam</th>
        <th>Date</th>
        <th>Subject</th>
         <th>Time</th>
        <th>Session</th>
        
          
      </tr>
    </thead>
    
     <tbody>
    
              <?php while($row= mysqli_fetch_array($result3)){?>
        <tr>
           
            <td style="color: white;"><?php echo $row['exam']; ?></td>
            <td style="color: white;"><?php echo $row['date']; ?></td>
            <td style="color: white;"><?php echo $row['subject']; ?></td>
            <td style="color: white;"><?php echo $row['time']; ?></td>
            <td style="color: white;"><?php echo $row['session']; ?></td>
        </tr>
        <?php } ?>

   </tbody>
        </div>

        </table>
       </div>


       <div class="container-fluid">
  <h1>Computer</h1>
  <h2>SEM IV</h2>
  
  <table class="table">
    <div class="col-sm-3">

    <thead>
    
      <tr>
        <th>Exam</th>
        <th>Date</th>
        <th>Subject</th>
         <th>Time</th>
        <th>Session</th>
        
          
      </tr>
    </thead>
    
     <tbody>
     
              <?php while($row= mysqli_fetch_array($result4)){?>
        <tr>
           
            <td style="color: white;"><?php echo $row['exam']; ?></td>
            <td style="color: white;"><?php echo $row['date']; ?></td>
            <td style="color: white;"><?php echo $row['subject']; ?></td>
            <td style="color: white;"><?php echo $row['time']; ?></td>
            <td style="color: white;"><?php echo $row['session']; ?></td>
        </tr>
        <?php } ?>



    
       </tbody>
        </div>

        </table>
       </div>


       <div class="container-fluid">
  <h1>Computer</h1>
  <h2>SEM V</h2>
  
  <table class="table">
    <div class="col-sm-3">

    <thead>
    
      <tr>
        <th>Exam</th>
        <th>Date</th>
        <th>Subject</th>
         <th>Time</th>
        <th>Session</th>
        
          
      </tr>
    </thead>
    
     <tbody>
    
              <?php while($row= mysqli_fetch_array($result5)){?>
        <tr>
           
            <td style="color: white;"><?php echo $row['exam']; ?></td>
            <td style="color: white;"><?php echo $row['date']; ?></td>
            <td style="color: white;"><?php echo $row['subject']; ?></td>
            <td style="color: white;"><?php echo $row['time']; ?></td>
            <td style="color: white;"><?php echo $row['session']; ?></td>
        </tr>
        <?php } ?>



    
       </tbody>
        </div>

        </table>
       </div>



<div class="container-fluid">
  <h1>Computer</h1>
  <h2>SEM VI</h2>
  
  <table class="table">
    <div class="col-sm-3">

    <thead>
    
      <tr>
        <th>Exam</th>
        <th>Date</th>
        <th>Subject</th>
         <th>Time</th>
        <th>Session</th>
        
          
      </tr>
    </thead>
    
     <tbody>
     
              <?php while($row= mysqli_fetch_array($result6)){?>
        <tr>
           
            <td style="color: white;"><?php echo $row['exam']; ?></td>
            <td style="color: white;"><?php echo $row['date']; ?></td>
            <td style="color: white;"><?php echo $row['subject']; ?></td>
            <td style="color: white;"><?php echo $row['time']; ?></td>
            <td style="color: white;"><?php echo $row['session']; ?></td>
        </tr>
        <?php } ?>


    
       </tbody>
        </div>

        </table>
       </div>

    
    <div class="container-fluid">
  <h1>Computer</h1>
  <h2>SEM VII</h2>
  
  <table class="table">
    <div class="col-sm-3">

    <thead>
    
      <tr>
        <th>Exam</th>
        <th>Date</th>
        <th>Subject</th>
         <th>Time</th>
        <th>Session</th>
        
          
      </tr>
    </thead>
    
     <tbody>
     
              <?php while($row= mysqli_fetch_array($result7)){?>
        <tr>
           
            <td style="color: white;"><?php echo $row['exam']; ?></td>
            <td style="color: white;"><?php echo $row['date']; ?></td>
            <td style="color: white;"><?php echo $row['subject']; ?></td>
            <td style="color: white;"><?php echo $row['time']; ?></td>
            <td style="color: white;"><?php echo $row['session']; ?></td>
        </tr>
        <?php } ?>



    
       </tbody>
        </div>

        </table>
       </div>


<div class="container-fluid">
  <h1>Computer</h1>
  <h2>SEM VIII</h2>
  
  <table class="table">
    <div class="col-sm-3">

    <thead>
    
      <tr>
        <th>Exam</th>
        <th>Date</th>
        <th>Subject</th>
         <th>Time</th>
        <th>Session</th>
        
          
      </tr>
    </thead>
    
     <tbody>
     
              <?php while($row= mysqli_fetch_array($result8)){?>
        <tr>
           
            <td style="color: white;"><?php echo $row['exam']; ?></td>
            <td style="color: white;"><?php echo $row['date']; ?></td>
            <td style="color: white;"><?php echo $row['subject']; ?></td>
            <td style="color: white;"><?php echo $row['time']; ?></td>
            <td style="color: white;"><?php echo $row['session']; ?></td>
        </tr>
        <?php } ?>
</tbody>
        </div>

        </table>
       </div>


  
       
       
           
           
    
       
        
          
      
     
           
            
        
       
           
        
      
       
           
          
        
     
              
      
    
        
          
   
       

     
        
   
 
    
   
     
             
  
 

       
        
          
      
      
              
 
   

 
      