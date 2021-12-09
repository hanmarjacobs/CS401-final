<!DOCTYPE html>
<html lang="en">
<nav>
  <ul>
    <li><a class = "active" href="index.php">Home</a></li>
    <li><a href="newpost.php">New Post</a></li>
    <li><a href="editpost.php">Edit Post</a></li>
  </ul>
</nav>

<head>
  <link rel="stylesheet" href="css/style.css">
  <title>Wizard</title>
</head>


<body>  
  <h1>Secret Wizard Forum</h1>

  <?php
    $filename = "blogEntries.txt";
    $posts = fopen($filename, "r");
    if (!$posts) {
      die("Unable to open $filename.");
    }

    // Read lines until EOF is reached
    while (!feof($posts)) {
      $line = fgets($posts);
      $parts = explode("`", $line);
      echo "<div><h2>$parts[0]</h2> <p>$parts[1]</p>";
      echo "</div>";
    }

    fclose($posts);
  ?>

</body>
  <script src="js/main.js"></script>
</html>