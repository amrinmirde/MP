 <?php
  session_start();
  include("style.php");
 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Slots</title>
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
  <div>
<fieldset>
<form action="slots.php" method="POST">
  
<div class="container-fluid">
  <h3>Slots Availability:</h3>
  
  <table class="table">
    <div class="col-sm-4" id="div_quotes">

    <thead>
      <tr>
        
        <th>From date:</th>
        <th>End date:</th>
        <th>Staff Name:</th>

      </tr>
    </thead>
    
     <tbody>
      
        <tr>
          
           <td><input type="text"  placeholder="d-m-y" name="from_date" id="from_date"></td>
           <td><input type="text"  placeholder="d-m-y" name="to_date" id="to_date"></td>
           <td><?php $staff_name="";
           $staff_name=$_SESSION['user_name'];?>
           <input type="text" name="staff_name" value='<?php echo $staff_name; ?>'></td>


            
           
         </tr>
       </tbody>
        </div>
        </table>
     <button type="submit">SUBMIT</button>
    </div>

    

</form>
</fieldset>
</body>
</html>