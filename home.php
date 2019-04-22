<?php
session_start(); 
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>EXAMCELL PRO</title>
  <style type="text/css">
  	img{
  		display: block;
  		margin-left:auto;
  		margin-right: auto;
  		width: 60%;
  		padding-top: 200px;
  		padding-left: 100px;
  	}
  /*img:hover {
  /* Start the shake animation and make the animation last for 0.5 seconds */
  /*animation: shake 7.0s; 

  /* When the animation is finished, start again */
 /*animation-iteration-count: infinite; 
  	}
  	@keyframes shake {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
   70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
}*/
  </style>
  <link href="csss/bootstrap.min.css" rel="stylesheet">
  <link href="csss/bootstrap-theme.css" rel="stylesheet">
  <link href="csss/elegant-icons-style.css" rel="stylesheet" />
  <link href="csss/font-awesome.min.css" rel="stylesheet" />
  <link href="csss/widgets.css" rel="stylesheet">
  <link href="csss/style.css" rel="stylesheet">
  <link href="csss/style-responsive.css" rel="stylesheet" />
  <link href="csss/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
  <section id="container" class="">
     <header class="header dark-bg">
      <a href="#" class="logo">EXAMCELL <span class="lite">PRO</span></a>
      <div class="top-nav notification-row">
      	 <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
     </header>

    <aside>
      <div id="sidebar" class="nav-collapse ">
        <ul class="sidebar-menu">
          <li><a class="" href="time_table.php">
                          <i class="icon_table"></i>
                          <span>Time Table</span></a></li>

        

          <li><a class="" href="duty_ass.php">
                          <i class="icon_table"></i>
                          <span>Duty Assigned</span></a></li>


          <li><a class="" href="dutyc.php">
                          <i class="icon_table"></i>
                          <span>Duty Chart</span></a></li>

                              
            </ul>
      </div>
    </aside>
  </section>
  <img src="img/a.jpg">
  </body>
</html>
   
 

