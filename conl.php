<?php

session_start();

$db = mysqli_connect('localhost', 'root', '','duty');
$errors = array(); 

if (isset($_POST['login_user'])){
   $user_name =$_POST['user_name']; 
  $password = $_POST['password'];

  if (empty($user_name)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }
    $query = "SELECT * FROM faculty WHERE user_name='$user_name' &&  password='$password'";
    $result = mysqli_query($db,$query);
  if (mysqli_num_rows($result)==1) {
    header('location:home.php');
  }
}
     else {
      header('location:login.php');
    }


  ?>
