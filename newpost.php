<!-- @HannahJacobson Winter 2021 CS401-->
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

<form action="writeentries.php" target="_blank" method="POST">
   <p>
     <label for="title">Title:</label>
     <input type="text" id="title" name="title" placeholder="My Wizardly Post Title!">
   </p>
   <p>
     <label for="textentry">Text:</label>
     <textarea id="textentry" name="textentry" placeholder="These spells are too complex for anyone else to understand, I swear." rows="10" cols="60"></textarea>
   </p>
   <p>
     <input type="submit" value="Submit">
   </p>
</form>

</html>