<?php 
if(isset($_POST['submit'])){
  
  require_once('includes/connbd.php');

  
  $email = trim($_POST['email']);
  $pass  = trim($_POST['pass']);

  $sql = "SELECT * FROM users 
          WHERE email  = '$email'";
    
  $loginControl = mysqli_query($conn,$sql);

  if($loginControl && mysqli_num_rows($loginControl) == 1){

    $user = mysqli_fetch_assoc($loginControl);
    $verify = password_verify($pass,$user['password']);

    if($verify){

      $_SESSION['loginUser'] = $user;

      if(isset($_SESSION['loginError'])){
        unset($_SESSION['loginError']);
      }

    }else{
      $_SESSION['loginError'] = 'Login Error';
      if(isset($_SESSION['loginUser'])){
        unset($_SESSION['loginUser']);
      }
     
    }

  }else{
    $_SESSION['loginError'] = 'Login Error';
    if(isset($_SESSION['loginUser'])){
        unset($_SESSION['loginUser']);
      }
    }
}  

header('Location:index.php');
  
