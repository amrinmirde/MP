<?php

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
    h1{
      margin-left: 550px;
      color: white;
    }
  </style>

</head>

<body>
<fieldset>
<form action="slotd.php" method="POST">
  
<div class="container-fluid">
  <h1>Non_Vacational Slots:</h1>
<table class="table">
    <div class="col-sm-3" id="div_quotes">

    <thead>
      <tr>
        <th style="color: white;">From date:</th>
        <th style="color: white;">End date:</th>
       
      </tr>
    </thead>
    
     <tbody>
      
        <tr>
           <td ><input type="text" placeholder="y-m-d" name="fdate" id="fdate"></td>
           <td><input type="text" placeholder="y-m-d" name="tdate" id="tdate"></td>
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