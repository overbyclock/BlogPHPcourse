<?php 
include('includes/connbd.php');

if(isset($_POST)){
  
  $rexName = "/^[a-zA-Záéíóúñ]{3,25}$/";

  if(!preg_match($rexName,$_POST['categoryName'])){

    $errors['name'] = 'Only letters.MIN 3 characters.MAX 25 ';
    $_SESSION['errors'] = $errors;
    header("Location:addcategory.php");
  }else{ 

     $categoryName = ucfirst($_POST['categoryName']);
     $errors = array();
     $succes = array();

     $sql = "SELECT name FROM categories 
             WHERE name = '$categoryName'";

     $result = mysqli_query($conn,$sql);

     if(mysqli_num_rows($result) >= 1){

       $errors['categoryExists'] = 'Error category exist';
       $_SESSION['errors'] = $errors;
       header("Location:addcategory.php");
     }else{

     $sql = "INSERT INTO categories 
             VALUES(null,'$categoryName')";
     $result = mysqli_query($conn,$sql);

     if($result){

        $succes['addCategory'] = 'Succes category added';
        $_SESSION['succes'] = $succes;
        header("Location:addcategory.php");
     }else{

         $errors['errorAddCategory'] = mysqli_error($conn);
         $_SESSION['errors'] = $errors;
         header("Location:addcategory.php");
     }
    }
  } 
}   