<?php
    
    session_start();

    if(isset($_SESSION['loginUser'])){
        session_destroy();
    }
   
    header('Location:index.php');
   
   

