<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Mac & Cheese</title>
</head>
<body>
<div class="pancakes">
 <div class="pancakeshead">
 <p>Baked Avacado Mac & Cheese</p>
 </div>

<div class="split left">

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

<div id="mySidenav" class="sidenav">
  <a href="index.html" id="home">Home</a>
  <a href="about.php" id="about">About</a>
  <a href="recipeindex.php" id="index">Recipe Index</a>
  <a href="recipecategories.php" id="categories">Recipe Categories</a>
  <a href="postquery.php" id="postquery">Post Query</a>
</div>

  <div class="top">
   <img src="maccheese.jpg" alt="MacCheese">
  </div>

<div class="almond" name="avocado">
   <p>Do you have Avocado?</p>
  <input type="radio" name="avocado" value="Yes">
  <label for="avocado">Yes</label>
  <input type="radio" name="avocado" value="No">
  <label for="avocado">No</label>
</div>

<div class="wheat" name="cream">
<p>Do you have Heavy Cream?</p>
  <input type="radio" name="cream" value="Yes">
  <label for="cream">Yes</label>
  <input type="radio" name="cream" value="No">
  <label for="cream">No</label>
</div>

<div class="allpurpose">
<p>Which Cheese do you have?</p>
  <input type="checkbox" name="allpurpose" value="SharpCheddar">
  <label for="allpurpose"> Sharp Cheddar </label><BR>
  <input type="checkbox" name="allpurpose" value="Parmesan">
  <label for="allpurpose">Parmesan</label><BR>
  <input type="checkbox" name="allpurpose" value="PepperJack">
  <label for="allpurpose"> PepperJack </label><BR>
  <input type="checkbox" name="allpurpose" value="Gruyere">
  <label for="allpurpose"> Gruyere </label>
</div>

<div class="button1">
<button class="button" name="ingredient" value="ingredient">Get Recipe</button>
</div>

</form>
</div>



<div class="splitright">
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
$avocado = $_POST['avocado'];
$cream = $_POST['cream'];
$ingredients = $_POST['ingredient'];

}

$con = mysqli_connect('localhost','asubramanian5','asubramanian5','asubramanian5');

$sql="SELECT * FROM Recipes WHERE Avocado='$avocado' AND Cream='$cream'";
$records=mysqli_query($con,$sql);


if($ingredients=="ingredient")
{
echo "<h3>Ingredients List</h3><BR>";

while($row=mysqli_fetch_array($records))
{
echo nl2br($row['Ingredients']);
echo "<h3>Recipe</h3><BR>";
echo nl2br($row['Recipe']);
}
}

mysqli_close($con);
?>
</div>

</div>
</body>
</html>
