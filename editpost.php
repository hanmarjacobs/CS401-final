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
    
    echo "<form action=\"editentries.php\" target=\"_blank\" method=\"POST\">";
    echo "<select name=\"Entry\">";

    for($i = 0; $i < $lineNumber; $i++){
        $x = $i + 1;
        echo "<option value=$i>Entry $x</option>";
    }

    echo "</select>";

    echo "<p>";
    echo "<label for=\"title\">Title:</label>";
    echo "<input type=\"text\" id=\"title\" name=\"title\" placeholder=\"My Blog Post!\" required>";
    echo "</p>";
    echo "<p>";
    echo "<label for=\"textentry\">Text:</label>";
    echo "<textarea id=\"textentry\" name=\"textentry\" placeholder=\"Hello World!\" rows=\"10\" cols=\"60\" required></textarea>";
    echo "</p>";

    echo "<p><input type=\"submit\" value=\"Submit\"></p>";
    echo "</form>";

?>

</html>