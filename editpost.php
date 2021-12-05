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
  <title>Hello World</title>
</head>

<?php

    $filename = "blogEntries.txt";
    $lineNumber = count(file($filename));

    echo $lineNumber;

    echo "<select name=\"Entry\">";

    for($i = 0; $i < $lineNumber; $i++){
        $x = $i + 1;
        echo "<option value=$i>Entry $x</option>";
    }

    echo "</select>";

?>

</html>