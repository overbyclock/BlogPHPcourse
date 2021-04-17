<?php require_once('includes/header.php') ?>
  
  <!-- SIDE BAR -->
  
  <?php require_once('includes/aside.php')?>

  <!-- CONTENT -->
      <div id="main">
      <h1>All Posts</h1>
  
       <?php $posts = getAllPosts($conn) ?>
  
       <?php 
          while($post = mysqli_fetch_assoc($posts)){
          
            echo '<article class="posts">
                   <a href="fullpost.php?id='.$post['id'].'">
                    <h2>'.$post['title'].'</h2>
                    <span id="subInfo">'.$post['name'].' '.$post['date_creation'].'</span>
                    <p>'.substr($post['description'],0,200).'...</p>
                   </a>
                  </article>'
            ;
          }
       ?>
      </div><!-- DIV MAIN CLOSE -->
   
      <!-- FOOTBAR -->
   <?php require_once('includes/footer.php');?>
  </body>
  </html>