<?php 
 
  
  if(isset($_POST['submit'])){

    require_once('includes/connbd.php');

    $name     = isset($_POST['name'])     ? $_POST['name']     : null;
    $lastName = isset($_POST['lastName']) ? $_POST['lastName'] : null;
    $email    = isset($_POST['email'])    ? $_POST['email']    : null;
    $pass     = isset($_POST['pass'])     ? $_POST['pass']     : null;
    $userID   = $_SESSION['loginUser']['id'];
   
    $rexName = "/^[a-zA-Záéíóúñ]{3,25}$/";
    $rexPass = "/[a-zA-Z0-9]{5,10}/";

    $errors = array();
    $succes = array();
    
    if(!preg_match($rexName,$name)){
      $errors['name'] = 'Only letters.MIN 3 characters.MAX 25 ';
    }  
     
    if(!preg_match($rexName,$lastName)){
      $errors['lastName'] = 'Only letters.MIN 3 characters.MAX 25 ';
    }          

    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
      $errors['email'] = 'The email is invalid';
    }

    if(!preg_match($rexPass,$pass)){
      $errors['pass'] = 'Only letters and numbers,min 5 characters max 10';
    }
}

if(count($errors) == 0 ){
   
   $securePass = password_hash($pass,PASSWORD_BCRYPT,['cost'=>4]);
   
    $sql = "UPDATE users SET 
            name = '$name',
            lastname = '$lastName',
            email = '$email',
            password = '$securePass'
            WHERE id = $userID";

                    
    $changeUser = mysqli_query($conn,$sql);
   
    if($changeUser){
  
        $succes['changeUser'] = 'Succes the settings has been changed';
        $_SESSION['succes'] = $succes;
       
        header('Location:settings.php');
    }else{
        $errors['changeUser'] = mysqli_error($conn);
        $_SESSION['errors'] = $errors;
        header('Location:settings.php');
        
    }
}else{
    $_SESSION['errors'] = $errors;
    header('Location:settings.php');
}

?>