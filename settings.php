<?php require_once('includes/redirection.php')?>
<?php require_once('includes/header.php') ?>
<?php require_once('includes/aside.php')?>
<?php require_once('includes/helpers.php')?>

<div id="main">

   <?php if(isset($_SESSION['errors'])){
      $errors = $_SESSION['errors'];
    }?>
    <?php if(isset($_SESSION['succes'])){
      $succes = $_SESSION['succes'];
    }?>

    <h1>Change your settings</h1>

    <?php if(isset($succes['changeUser'])){
      echo (showSuccesForm($succes,'changeUser'));
    }?>
      
    <?php if(isset($errors['changeUser'])){
      echo (showErrorsForm($errors,'changeUser'));
    }?>

    <form action="changeSettings.php" method="post">

    <label for="name">Name</label>
    <input type="text" name="name" value=<?php echo $_SESSION['loginUser']['name']?>>
    <?php if(isset($errors['name'])){
      echo (showErrorsForm($errors,'name'));
    }?>
    <label for="lastName">Last name</label>
    <input type="text" name="lastName" value=<?php echo $_SESSION['loginUser']['lastname']?>>
    <?php if(isset($errors['lastName'])){
      echo (showErrorsForm($errors,'lastName'));
    }?>            
    <label for="email">Email</label>
    <input type="email" name="email" value=<?php echo $_SESSION['loginUser']['email']?>>
    <?php if(isset($errors['email'])){
      echo (showErrorsForm($errors,'email'));
    }?>
    <label for="pass">Password</label>
    <input type="password" name="pass" id="">
    <?php if(isset($errors['pass'])){
      echo (showErrorsForm($errors,'pass'));
    }?> 
       
    <input type="submit" name="submit" value="Submit">
    </form>
    <?php hideErrors();?>
</div>










<?php require_once('includes/footer.php');?>