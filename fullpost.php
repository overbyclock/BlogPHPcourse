<?php require_once('includes/header.php') ?>

<!-- SIDE BAR -->

<?php require_once('includes/aside.php') ?>

<!-- CONTENT -->
<div id="main">

  <?php $posts = getPostByID($conn, $_GET['id']); ?>
  <?php if (!$posts) { header("Location:index.php");}?>
  <?php 
    if(isset($_SESSION['errorPostDelete'])){
      showErrorsForm($conn,'errroPostDelete');
    }
  ?>
  
  <?php
      echo '<article class="posts">
             <a href="">
              <h1>' . $posts['title'] . '</h1>
              <span id="subInfo">' . $posts['name'] . ' ' . $posts['date_creation'] . '</span>
              <p>' . $posts['description'] . '</p>
             </a>
            </article>';
     

      if ($_SESSION['loginUser'] && $_SESSION['loginUser']['id'] == $posts['user_id']) 
      {
        $idDelete = 'deletePost.php?id='.$posts['id'].'&userPost='.$posts['user_id'];
        $idEdit = 'editPost.php?id='.$posts['id'].'&userPost='.$posts['user_id'];
        echo '<div id="containerButtons">
              
                <a href="'.$idDelete.'">Delete Post</a>
                <a href="'.$idEdit.'">Edit Post</a>
              </div>';
      }
      ?>


</div><!-- DIV MAIN CLOSE -->

<!-- FOOTBAR -->
<?php require_once('includes/footer.php'); ?>
</body>

</html>