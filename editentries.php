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

    $source='blogEntries.txt';
    $target='editingFile.txt';

    // copy operation
    $sh=fopen($source, 'r');
    $th=fopen($target, 'w');
    while (!feof($sh)) {
        $line=fgets($sh);
        if ($count == $replace) {
            $line=$txt;
        }
        fwrite($th, $line);
        $count++;
    }

    fclose($sh);
    fclose($th);

    // delete old source file
    unlink($source);
    // rename target file to source file
    rename($target, $source);
  
}

?>

</html>