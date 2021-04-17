<?php require_once('includes/connbd.php');?>
<?php require_once('includes/helpers.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Blog Project</title>
</head>
<body>

<!-- HEADER -->

<header id="header">
    <div id="logo">
      <a href="index.php">OveRbyBlog VideoGames</a>
    </div>

    <!-- MENU -->
    <?php 
      $categories = getCategories($conn);
    ?>
    <nav id="nav">
      <ul>
        <li><a href="index.php">Home</a></li>
        <?php 
          while($category = mysqli_fetch_assoc($categories)){
            echo '<li><a href="postsbycategory.php?id='.$category['id'].'">'.$category['name'].'</a></li>';
          }
        ?>
        <li><a href="index.php">About Me</a></li>
        <li><a href="index.php">Contact Me</a></li>
      </ul>
    </nav>
    <div class="clearfix"></div>
  </header>

  <div id="container">