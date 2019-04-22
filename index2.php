<?php
session_start();
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EXAMCELL AUTOMATION</title>
<link rel="stylesheet" href="css2/bootstrap.min.css">
<link rel="stylesheet" href="css2/bootstrap-theme.min.css">
<link href="css2/style.css" rel="stylesheet" type="text/css" />
<script src="js/bootstrap.min.js"></script>
<style type="text/css">
  body{
    background-image: url(img/gh.jpg);
    background-size: cover;
  }
</style>
</head>
<body>
<div class="content">
  <div class="header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-sm-6  col-md-4 col-lg-4"> </div>
        <div class="col-xs-12 col-sm-6  col-md-8 col-lg-8">
          <nav class="main_menu">
            <ul>
               <li class="active"><a href="index.php">Home<br></a></li>
             
              <li><a href="asag.php">Update Duties</a></li>
              <li><a href="dutys.php">Update DC</a></li>
               <li class="active"><a href="timtab.php">Update TT</a></li>
               <li><a href="logout2.php">Logout</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="page_content">
    <div class="container-fluid">
      <div class="row">
        <div class="hidden-xs col-sm-1  col-md-2 col-lg-2"> </div>
        <div class="col-xs-12 col-sm-10  col-md-8 col-lg-8">
          <form action="generate.php?step=1" method="post" enctype="application/x-www-form-urlencoded">
          
            </div>
            </div>
            <center>
            </center>
          </form>
        </div>
        <div class="hidden-xs col-sm-1  col-md-2 col-lg-2"> </div>
      </div>
    </div>
  </div>
</div>
<footer>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="col-md-6">
        <ul>
      </div>
      <div class="col-md-6 text-right copyright"> Developed by <a href="#">Department of TECO</a> </div>
    </div>
  </div>
</footer>
</body>
</html>
