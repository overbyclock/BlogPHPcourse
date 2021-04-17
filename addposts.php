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

    <h1>Add new posts</h1>

    <?php if(isset($succes['addPost'])){
      echo (showSuccesForm($succes,'addPost'));
    }?>
      
    <?php if(isset($errors['errorAddPost'])){
      echo (showErrorsForm($errors,'errorAddPost'));
    }?>

    <form action="savePost.php" method="post">

        <label for="title">Title</label>
        <input type="text" name="title" id="">
        <?php if(isset($errors['title'])){
          echo (showErrorsForm($errors,'title'));
        }?>

        <label for="description">Description</label>
        <textarea name="description"></textarea>
        <?php if(isset($errors['description'])){
          echo (showErrorsForm($errors,'description'));
        }?>

        <label form="categoryID">Choose a category:</label>
        <select name="categoryID">
          <?php  $categories = getCategories($conn);?>
          <?php while($category = mysqli_fetch_assoc($categories)){
              echo '<option value="'.$category['id'].'">'.
                   $category['name'].'</option>';
          }
          ?>

          
        </select>
        <?php hideErrors();?>
        <input type="submit" name="submit" value="Submit">
    </form>
</div>
<?php require_once('includes/footer.php');?>
