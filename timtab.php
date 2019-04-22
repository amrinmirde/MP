<?php
 include("style.php");
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

    th{
      color: white;
    }
    body{
      background-image: url(img/f.jpg);
    }
    </style>
  
</head>

<body>
<fieldset>

<form action="tt.php" method="POST">
<h3>TIME TABLE ..!</h3>
<br>


<div class="container-fluid">
  
<table class="table" >
    <div class="col-sm-3" >
<thead>
      <tr>
        <th>Exam</th>
        <th>Date</th>
        <th>Subject</th>
         <th>Time</th>
        <th>Session</th>
        <th>Semester</th>
        <th>Department</th>
          
      </tr>
    </thead>
    
     <tbody>
      
        <tr>
          
          <td><input type="text" name="exam" ></td>
           <td><input type="date" name="date" ></td>
            <td><input type="text" name="subject" ></td>
            <td><input type="text" name="time" ></td>
           <td><input type="text" name="session"></td>
           <td><input type="text" name="sem"></td>
           <td><input type="text" name="department"></td>
        </tr>


    <!--
    <tr>
           <td><input type="text" name="exam[]" ></td>
           <td><input type="date" name="date[]" ></td>
           <td><input type="text" name="subject[]" ></td>
            <td><input type="text" name="time[]" ></td>
           <td><input type="text" name="session[]"></td>
           <td><input type="text" name="sem[]"></td>
           <td><input type="text" name="department[]"></td>
        
        </tr>

          <tr>
           <td><input type="text" name="exam[]"></td>
           <td><input type="date" name="date[]"></td>
           <td><input type="text" name="subject[]" ></td>
            <td><input type="text" name="time[]" ></td>
           <td><input type="text" name="session[]"></td>
           <td><input type="text" name="sem[]"></td>
           <td><input type="text" name="department[]"></td>
        
      </tr> 

        

          <tr>
           <td><input type="text" name="exam[]"></td>
           <td><input type="date" name="date[]"></td>
           <td><input type="text" name="subject[]" ></td>
            <td><input type="text" name="time[]" ></td>
           <td><input type="text" name="session[]"></td>
           <td><input type="text" name="sem[]"></td>
           <td><input type="text" name="department[]"></td>
        
        </tr> 

        

          <tr>
           <td><input type="text" name="exam[]"></td>
           <td><input type="date" name="date[]"></td>
           <td><input type="text" name="subject[]" ></td>
            <td><input type="text" name="time[]" ></td>
           <td><input type="text" name="session[]"></td>
           <td><input type="text" name="sem[]"></td>
           <td><input type="text" name="department[]"></td>
        </tr> 

        <tr>
           <td><input type="text" name="exam[]" ></td>
           <td><input type="date" name="date[]" ></td>
            <td><input type="text" name="subject[]" ></td>
            <td><input type="text" name="time[]" ></td>
           <td><input type="text" name="session[]"></td>
           <td><input type="text" name="sem[]"></td>
           <td><input type="text" name="department[]"></td>
        
        </tr>
-->
       </tbody>
        </div>
        
        </table>
     <button type="submit" name="submit">SUBMIT</button>
    </div>
  
       
    

</form>
</fieldset>


</body>
</html>
                                                                                        
 