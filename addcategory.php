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

    <h1>Add categories</h1>
    <form action="saveCategory.php" method="post">
        <label for="categoryName">Category name</label>
        <input type="text" name="categoryName" id="">
        <?php if(isset($errors['categoryExists'])){
          echo (showErrorsForm($errors,'categoryExists'));
        }?>
        <?php if(isset($succes['addCategory'])){
          echo (showSuccesForm($succes,'addCategory'));
        }?>
        <?php if(isset($errors['name'])){
          echo (showErrorsForm($errors,'name'));
        }?>
         <?php if(isset($errors['errorAddCategory'])){
          echo (showErrorsForm($errors,'errorAddCategory'));
        }?>
        <?php hideErrors();?>
        <input type="submit" name="submit" value="Submit">
    </form>

</div>







<?php require_once('includes/footer.php');?>
