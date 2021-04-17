<?php 
 
  
  if(isset($_POST['submit'])){

    require_once('includes/connbd.php');

    $name     = isset($_POST['name'])     ? $_POST['name']     : null;
    $lastName = isset($_POST['lastName']) ? $_POST['lastName'] : null;
    $email    = isset($_POST['email'])    ? $_POST['email']    : null;
    $pass     = isset($_POST['pass'])     ? $_POST['pass']     : null;
     
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
   
    $sql = "INSERT INTO users 
            VALUES(null,
                   '$name',
                   '$lastName',
                   '$email',
                   '$securePass',
                    CURDATE());";
                    
    $addUser = mysqli_query($conn,$sql);
   
    if($addUser){
  
        $succes['addUser'] = 'Add user succesfully';
        $_SESSION['succes'] = $succes;
       
        header('Location:index.php');
    }else{
        $errors['addUser'] = mysqli_error($conn);
        $_SESSION['errors'] = $errors;
        header('Location:index.php');
        
    }
}else{
    $_SESSION['errors'] = $errors;
    header('Location:index.php');
}

?>