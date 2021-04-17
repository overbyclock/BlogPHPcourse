<?php

require_once('includes/connbd.php');
require_once('includes/redirection.php');
require_once('includes/helpers.php');

if ($_SESSION['loginUser'] && $_SESSION['loginUser']['id'] == $_GET['userPost']) {
   $id = $_GET['id'];
   $error  = array();
   $succes = array();

   $sql = "DELETE from posts
           WHERE id = '$id'";
    $result = mysqli_query($conn,$sql);

    if($result){
    
    $succes['postDelete'] = 'The post has been deleted';
    echo showSuccesForm($succes,'postDelete');
    header('Refresh:5;url=index.php');
    

    }else{
     
      $error['errorPostDelete'] = 'Error to try deleted the post';
      echo showErrorsForm($error,'errorPostDelete');
      header('Refresh:5;url=index.php');
    }

}else{
    
}


?>