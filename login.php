
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>   
    <link rel="stylesheet" href="css/normalize.css">
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/main.css">
    <style type="text/css">
      

    body{
    
      background-image: url(2.jpg);
      background-size: cover;
    }

    .container{
      width: 500px;
      height: 450px;
      text-align: center;
      margin: 0 auto;
      background-color: white;
      border-radius: 4px;
      margin-top:160px;
    }
    .container img{
      width: 150px;
      height: 150px;
      margin-top: -60px;
      margin-right: 30px;
      vertical-align: middle;
      border-radius: 50%;
    }
    .container .avatar img{
      position: absolute;
      left: (50%-50px);
      top: -50px;
  

    }
  
    input[type=text], input[type=password] {
  max-height:250px; 
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 2px solid #ccc;
  box-sizing: border-box;
}

    button{
    	background-color: #6a4acd;
    	border-color: #6a4acd;
      padding:5px 7px;
      height: 30px;
      width: 100px;
    }
  
    button:hover {
  opacity: 0.9;
  display: inline-block;
}
.req{
  padding-right: 360px;
}
    </style>

    </head>
    <body>
 <?php
  //Printing Invalid input
  if(isset($_GET['error']))
   echo '<div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>Oops..!</b> Authentication error..! Please check your username and password. <style="color:blue;text-align=center></style></div>';

  ?>
  <div class="container">
    
    <img src="as.jpg" class="avatar">
      <form  method="POST" action="login_action.php" >
        <div class="form-input">

     
      
      
                 
                <label for="user_name" class="req">UserName</label>
                <input id="user_name" placeholder="Enter Username" type="text"  name="user_name">

                <label for="password" class="req">Password</label>
                <input type="password"  name="password" placeholder="Enter Password" >
                   
            <br><br>
          </div>
            <div>
            <button type="submit" name="login_user"  >Login</button>
          <p>Not a user?</p><a href="conreg.php">Sign Up</a>
          </p>
    

            </div>

    </form>
  </div>
 
</body>

</html>
