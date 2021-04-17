<?php

function showErrorsForm($errors, $field)
{

  $msgError = '<div style="background-color:red;" class= "alert alert-error">'.
    $errors[$field]."</div>";
  return $msgError;
}

function showSuccesForm($succes, $field)
{

  $msgSucces = '<div style="background-color:green;" class= "alert alert-succes">'.
    $succes[$field]."</div>";
  return $msgSucces;
}

function hideErrors()
{
  unset($_SESSION['errors']);
  unset($_SESSION['succes']);
}

function getCategories($conn)
{

  $sql = "SELECT * FROM categories ORDER BY id ASC";
  $categories = mysqli_query($conn, $sql);
  $result = array();

  if ($categories && mysqli_num_rows($categories) >= 1) {
    $result = $categories;
  } else {
    $result = mysqli_error($conn);
  }
  return $result;
}

function getCategory($conn, $id)
{

  $sql = "SELECT * FROM categories WHERE id = '$id'";
  $categories = mysqli_query($conn, $sql);
  $result = array();

  if ($categories && mysqli_num_rows($categories) >= 1) {
    $result = mysqli_fetch_assoc($categories);
  } else {
    $result = false;
  }
  return $result;
}

function getPosts($conn)
{
  $sql = "SELECT p.*, c.name FROM posts p
            INNER JOIN categories c 
            WHERE p.category_id = c.id 
            ORDER BY date_creation DESC LIMIT 5";

  $posts = mysqli_query($conn, $sql);
  $result = array();

  if ($posts && mysqli_num_rows($posts) >= 1) {
    $result = $posts;
  } else {
    $result = mysqli_error($conn);
  }

  return $result;
}

function getPostByID($conn, $id)
{
  $sql = "SELECT p.*, c.name FROM posts p
            INNER JOIN categories c 
            WHERE p.category_id = c.id
            AND p.id = '$id'";

  $posts = mysqli_query($conn, $sql);
  $result = array();

  if ($posts && mysqli_num_rows($posts) >= 1) {
    $result = mysqli_fetch_assoc($posts);
  } else {
    $result = false;
  }

  return $result;
}

function getAllPosts($conn)
{
  $sql = "SELECT p.*, c.name FROM posts p
            INNER JOIN categories c 
            WHERE p.category_id = c.id 
            ORDER BY date_creation DESC";

  $posts = mysqli_query($conn, $sql);
  $result = array();

  if ($posts && mysqli_num_rows($posts) >= 1) {
    $result = $posts;
  } else {
    $result = mysqli_error($conn);
  }
  return $result;
}

function getPostsByCategory($conn, $category)
{
  $sql = "SELECT p.*, c.name FROM posts p
            INNER JOIN categories c 
            WHERE p.category_id = c.id 
            AND p.category_id = '$category'
            ORDER BY date_creation DESC";

  $posts = mysqli_query($conn, $sql);
  $result = array();

  if ($posts && mysqli_num_rows($posts) >= 1) {
    $result = $posts;
  } else {
    $result = mysqli_error($conn);
  }
  return $result;
}

function getPostByTitle($conn,$search){
  $sql = "SELECT * FROM posts
          WHERE title Like '%$search%'";
  $posts = mysqli_query($conn,$sql);
  $result = array();

  if($posts && mysqli_num_rows($posts) >= 1){
    $result = $posts;

  }else{
    $result = "There are nothing! :(";
   
  }        
  return $result;
}
