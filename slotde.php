<?php

include("style.php");

?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
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
  </style>
</head>
<body>
<h3> NON_VACATIONAL SLOTS..!</h3>

<?php

$fdate=$tdate=$result="";


$db = mysqli_connect("localhost", "root", "","duty");

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT fdate,tdate from slotd";
$result = mysqli_query($db,$sql);


 ?>    
  <div class="container">
 <div class=" table-responsive">
        <table class="table table-bordered">
    <thead>

        <tr>
            <th style="color: white;">From Date</th>
            <th style="color: white;">To Date</th>
            
        </tr>
    </thead>
    <tbody>
              <?php while($row= mysqli_fetch_array($result)){?>
        <tr>
           
            <td style="color: white;"><?php echo $row['fdate']; ?></td>
            <td style="color: white;"><?php echo $row['tdate']; ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
</div>
</div>
</body>
</html>
