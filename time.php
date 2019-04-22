<?php

include("style.php");

?>
<!DOCTYPE html>
<html>
<head>
<title>Time Table</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>   
    <link rel="stylesheet" href="css/normalize.css">
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/main.css">
 <Style>
   body{
     background-image:url("3.jpg");
    background-size: cover;
    } 

    button{
      background-color: #1c6ced;
      border-color: #1c6ced;
    }
  </Style>

</head>
<body>

<div class="first">
<h2>Time_Table</h2>
<form action="tt.php"  method="POST">

<LABEL>Exam:</LABEL>
            <select name="exam">
              <option>No Selection</option>
              <option value="CBGS">CBGS</option>
              <option value="CBCGS">CBCGS</option>
              
            </select>
        <br>
<br>
   <LABEL >Department:</LABEL>
            <select name="department">
              <option >No Selection</option>
              <option value="Computer">Computer</option>
            </select>
        <br>
        <br>
<LABEL >Semester:</LABEL>
            <select name="sem">
              <option>No Selection</option>
              <option value="I">I</option>
              <option value="II">II</option>
              
            </select>
        <br>
        <br>

        <LABEL >Session:</LABEL>
            <select name="session">
              <option>No Selection</option>
              <option value="morning">morning</option>
              <option value="evening">evening</option>
              
            </select>
        <br>
        <br>


<label>Time :</label>
<input name="time"  type='text'>
<br>

<br>
Date :<br>
<input name="date" type="date"><br><br>
<br>
<br>
<label>Subject :</label>
<input type="text" name="subject[]" >
<input type="text" name="subject[]" >
<input type="text" name="subject[]" >
<input type="text" name="subject[]" >
<input type="text" name="subject[]">
<input type="text" name="subject[]">
<input type="text" name="subject[]">

<button name="button" type="submit">Submit</button>
<!---- Including PHP File Here ---->

</form>
</div>

</body>
</html>