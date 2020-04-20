<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head><title>Recipe Categories</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
    session_start();
    
    if (!isset($_SESSION['username'])) {
        header("location: login.php");
    }
?>

<?php
$username = $_COOKIE['name'];
?>

<div class="categories">

<div class="recipehead">
 <h4>Welcome <?php echo $username ?></h4>
 </div>

<div class="rightlogin">
<a href="login.php" id="about">Logout</a>
</div>
  

<div id="mySidenav" class="sidenav">
  <a href="index.html" id="home">Home</a>
  <a href="about.php" id="about">About</a>
  <a href="recipeindex.php" id="index">Recipe Index</a>
  <a href="recipecategories.php" id="categories">Recipe Categories</a>
  <a href="postquery.php" id="postquery">Post Query</a>
</div>



<div class="sec1">
<h3>Egg</h3>
<ul class="a">
 <li><a href="pancakes.php">Healthy Almond Flour Pancakes</a></li>
 <li><a href="bananamuffins.php">Banana Muffins</a></li>
</ul>
</div>

<div class="sec2">
<h3>Pasta</h3>
<ul class="a">
 <li><a href="maccheese.php">Baked Avocado Mac & Cheese</a></li>
</ul>
</div>

</div>

</body>
</html>