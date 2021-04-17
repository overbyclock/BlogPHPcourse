<?php require_once('includes/redirection.php')?>
<?php require_once('includes/header.php') ?>
<?php require_once('includes/aside.php')?>
<?php require_once('includes/helpers.php')?>

<?php if (!$_SESSION['loginUser'] && $_SESSION['loginUser']['id'] != $_GET['userPost']) {
        header('Location:index.php');
      }
?>
<?php $post = getPostByID($conn, $_GET['id'])?>

<div id="main">

   <?php if(isset($_SESSION['errors'])){
      $errors = $_SESSION['errors'];
    }?>
    <?php if(isset($_SESSION['succes'])){
      $succes = $_SESSION['succes'];
    }?>

    <h1>Edit Post</h1>

    <?php if(isset($succes['addPost'])){
      echo (showSuccesForm($succes,'addPost'));
    }?>
      
    <?php if(isset($errors['errorAddPost'])){
      echo (showErrorsForm($errors,'errorAddPost'));
    }?>

    <form action="saveEditPost.php" method="post">
       
        <label for="title">Title</label>
        <input type="text" name="title" value="<?php echo $post['title']?>">
        <?php if(isset($errors['title'])){
          echo (showErrorsForm($errors,'title'));
        }?>

        <label for="description">Description</label>
        <textarea name="description"><?php echo $post['description']?></textarea>
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
        <input type="hidden" name="postID" value="<?php echo $post['id']?>">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php hideErrors();?>
</div>
<?php require_once('includes/footer.php');?>
