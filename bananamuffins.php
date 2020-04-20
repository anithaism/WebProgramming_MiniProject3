<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Banana Muffins</title>
</head>
<body>
<div class="pancakes">
 <div class="pancakeshead">
 <p>Banana Muffins</p>
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
   <img src="muffin.jpg" alt="Muffins">
  </div>

<div class="almond">
  <p>Do you have Wheat flour?</p>
  <input type="radio" name="wheat" value="Yes">
  <label for="wheat">Yes</label>
  <input type="radio" name="wheat" value="No">
  <label for="wheat">No</label>
</div>

<div class="wheat">
<p>Do you have All purpose flour?</p>
  <input type="radio" name="maida" value="Yes">
  <label for="maida">Yes</label>
  <input type="radio" name="maida" value="No">
  <label for="maida">No</label>
</div>

<div class="allpurpose">
<p>Do you have Vegetable oil?</p>
  <input type="radio" name="oil" value="Yes">
  <label for="oil">Yes</label>
  <input type="radio" name="oil" value="No">
  <label for="oil">No</label>
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
$wheat = $_POST['wheat'];
$maida = $_POST['maida'];
$oil = $_POST['oil'];
$ingredients = $_POST['ingredient'];

}

$con = mysqli_connect('localhost','asubramanian5','asubramanian5','asubramanian5');

$sql="SELECT * FROM Muffins WHERE Wheat='$wheat' AND Allpurpose='$maida' AND Oil='$oil'";
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
