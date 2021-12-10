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

<h1> Edit </h1>

<?php

    $filename = "blogEntries.txt";
    $lineNumber = count(file($filename));
    
    echo "<form action=\"editentries.php\" target=\"_blank\" method=\"POST\">";
    echo "<select name=\"Entry\"> id=\"Entry\">";

    for($i = 0; $i < $lineNumber; $i++){
        $x = $i + 1;
        echo "<option value=$i>Entry $x</option>";
    }

    echo "</select>";

    echo "<p>";
    echo "<label for=\"title\">Title:</label>";
    echo "<input type=\"text\" id=\"title\" name=\"title\" placeholder=\"Rename this Post!\" required>";
    echo "</p>";
    echo "<p>";
    echo "<label for=\"textentry\">Text:</label>";
    echo "<textarea id=\"textentry\" name=\"textentry\" placeholder=\"I am overwriting all your arcane secrets as we speak.\" rows=\"10\" cols=\"60\" required></textarea>";
    echo "</p>";

    echo "<p><input type=\"submit\" value=\"Submit\"></p>";
    echo "</form>";

?>

<h1> Delete </h1>

<?php

    $filename = "blogEntries.txt";
    $lineNumber = count(file($filename));

    echo "<form action=\"deleteentry.php\" target=\"_blank\" method=\"POST\">";
    echo "<select name=\"Entry\"> id=\"Entry\">";

    for($i = 0; $i < $lineNumber; $i++){
        $x = $i + 1;
        echo "<option value=$i>Entry $x</option>";
    }

    echo "</select>";

    echo "<p><input type=\"submit\" value=\"Submit\"></p>";
    echo "</form>";


?>

</html>