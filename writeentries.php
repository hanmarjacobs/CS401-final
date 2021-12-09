<!DOCTYPE html>
<html lang="en">
<nav>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a class = "active" href="newpost.php">New Post</a></li>
    <li><a href="editpost.php">Edit Post</a></li>
  </ul>
</nav>

<head>
  <link rel="stylesheet" href="css/style.css">
  <title>Wizard</title>
</head>

<h1>Posted!</h1>

<?php

if( isset($_POST['title'] ) && isset( $_POST['textentry'] ) )
{
    $txt= $_POST['title'].'`'.$_POST['textentry'] . PHP_EOL; 
    file_put_contents('blogEntries.txt', $txt, FILE_APPEND);
}

?>

</html>