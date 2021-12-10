<!-- @HannahJacobson Winter 2021 CS401-->
<!DOCTYPE html>
<html lang="en">
<nav>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="newpost.php">New Post</a></li>
    <li><a class = "active" href="editpost.php">Edit Post</a></li>
  </ul>
</nav>

<head>
  <link rel="stylesheet" href="css/style.css">
  <title>Wizard</title>
</head>

<h1>Deleted!</h1>
<p>
  <tiny>
    Now they'll never find your secrets...
</tiny>
</p>

<?php

if( isset($_POST['Entry'] ))
{

    $lines = file('blogEntries.txt');
    $lineNumber = count(file($filename));
    $replace = $_POST['Entry'];
    $result = '';
    $count = 0;

    $source='blogEntries.txt';
    $target='editingFile.txt';

    $sh=fopen($source, 'r');
    $th=fopen($target, 'w');
    while (!feof($sh)) {
        $line=fgets($sh);
        if ($count == $replace) {
            $line="";
        }
        fwrite($th, $line);
        $count++;
    }

    fclose($sh);
    fclose($th);

    unlink($source);
    rename($target, $source);
  
}

?>

</html>