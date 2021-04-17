<?php 

include('includes/connbd.php');

if($_POST['submit']){
    $userID      = $_SESSION['loginUser']['id'];
    $categoryID  = $_POST['categoryID'];
    $title       = $_POST['title'];
    $description = $_POST['description'];

    $errors = array();
    $succes = array();

    if(strlen($title) < 2 ){
        $errors['title'] = 'Min 2 characters';
    }

    if(strlen($description) < 50){
        $errors['description'] = 'Min 50 characters';

    }

    if(count($errors) > 0){
      $_SESSION['errors'] = $errors;
      header('Location:addposts.php');
    }else{

        $sql = "INSERT INTO posts
                VALUES(null,
                       '$userID',
                       '$categoryID',
                       '$title',
                       '$description',CURDATE())";

        $result = mysqli_query($conn,$sql);
        
        if($result){
          $succes['addPost'] = 'Succes the posts has been added';
          $_SESSION['succes'] = $succes;
          header('Location:addposts.php');
        }else{
          $errors['errorAddPost'] = mysqli_error($conn);
          $_SESSION['errors'] = $errors;
          header('Location:addposts.php');
        }
    }
}