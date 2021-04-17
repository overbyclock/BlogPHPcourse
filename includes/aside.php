<aside id="sidebar">
<div id="search" class="block-aside">
    <h3>Search title</h3>
    <form action="search.php" method="POST">
      <input type="text" name="search">
      <input type="submit" name="submit" value="Submit">

    </form>
  </div>
  <?php 
    
    if(isset($_SESSION['loginUser'])){
      echo '<div id="loginWelcome" class="block-aside">'.
              '<h3>Welcome '.$_SESSION['loginUser']['name'].'</h3>'.
              '<a class="button button-black" href="logout.php">LOGOUT</a>'.
              '<a class="button button-black" href="settings.php">SETTINGS</a>'.
              '<a class="button button-orange" href="addposts.php">ADD POSTS</a>'.
              '<a class="button button-orange" href="addcategory.php">ADD CATEGORY</a>'.
            '</div>';
    }
    
  ?>
  <?php 
    if(isset($_SESSION['loginError'])){
      echo '<div id="loginError" class="block-aside">'.
              '<h3>'.$_SESSION['loginError'].'</h3>'.
           '</div>';
    }
  ?>
  <?php if(!isset($_SESSION['loginUser'])): ?>

  <div id="login" class="block-aside">
    <h3>Sign IN</h3>
    <form action="login.php" method="POST">

      <label for="email">Email</label>
      <input type="email" name="email" id="" value="francisco@gmail.com">

      <label for="pass">Password</label>
      <input type="password" name="pass" id="" value="123456">

      <input type="submit" name="submit" value="Submit">

    </form>
  </div>
  <div id="register" class="block-aside">

    <?php if(isset($_SESSION['errors'])){
      $errors = $_SESSION['errors'];
    }?>
    <?php if(isset($_SESSION['succes'])){
      $succes = $_SESSION['succes'];
    }?>

    <h3>Sign UP</h3>
    <?php if(isset($errors['addUser'])){
      echo (showErrorsForm($errors,'addUser'));
    }?>
    <?php if(isset($succes['addUser'])){
      echo (showSuccesForm($succes,'addUser'));
    }?>
    <form action="register.php" method="POST">
      <label for="name">Name</label>
      <input type="text" name="name" id="">
      <?php if(isset($errors['name'])){
        echo (showErrorsForm($errors,'name'));
      }?>
          <label for="lastName">Last name</label>
          <input type="text" name="lastName" id="">
          <?php if(isset($errors['lastName'])){
            echo (showErrorsForm($errors,'lastName'));
          }?>            
          <label for="email">Email</label>
          <input type="email" name="email" id="">
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
    <?php endif; ?> 
    </aside>

   