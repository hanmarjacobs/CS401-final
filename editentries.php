<!DOCTYPE html>
<html lang="en">
<nav>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="newpost.php">New Post</a></li>
    <li><a href="editpost.php">Edit Post</a></li>
  </ul>
</nav>

<head>
  <link rel="stylesheet" href="css/style.css">
  <title>Edited!</title>
</head>

<?php

if( isset($_POST['Entry'] ) && isset( $_POST['textentry'] ) && isset( $_POST['title'] ) )
{

    $lines = file('blogEntries.txt');
    $lineNumber = count(file($filename));
    $txt = $_POST['title'].'`'.$_POST['textentry'] . PHP_EOL; 
    $replace = $_POST['Entry'];
    $result = '';
    $count = 0;

    foreach($lines as $line) {
        if($count == $replace) {
            $result .= $txt;
        } else {
            $result .= $line;
        }
        $count++;
    }

    file_put_contents('file.txt', $result);



    
}

?>

</html>