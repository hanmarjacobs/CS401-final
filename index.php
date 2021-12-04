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


<body>  
  <?php echo "<h1>Hello World! (CSS has changed this text to blue!)</h1>" ?>  
  <img src="img/thedude.jpg" alt="The dude">


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
      echo "<span><h2>$parts[0]</h2> <p>$parts[1]</p>";
      echo "</span>";
      echo "<form action=\"editpost.php\" method=\"POST\"> <input type=\"hidden\" id=\"postTitle\" name=\"postTitle\" value=\"$post_id\"> <input type=\"submit\" value=\"Edit\"/>";
      echo "</form>";
    }

    fclose($posts);
  ?>


  <!--<button type="button" onclick="helloJS()">Click Me!</button>-->
  
</body>
  <script src="js/main.js"></script>
</html>