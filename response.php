<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Post Query</title>
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

<div class="responses">

<div class="responseshead">
<p>Queries and Responses</p>
</div>

<div id="mySidenav" class="sidenav">
  <a href="index.html" id="home">Home</a>
  <a href="about.php" id="about">About</a>
  <a href="recipeindex.php" id="index">Recipe Index</a>
  <a href="recipecategories.php" id="categories">Recipe Categories</a>
  <a href="postquery.php" id="postquery">Post Query</a>
</div>

<div class="rightlogin">
<a href="login.php" id="about">Logout</a>
</div>

<table>
<tr>
<th>Title</th>
<th>Query</th>
<th>Response</th>
</tr>


<?php
$con = mysqli_connect('localhost','asubramanian5','asubramanian5','asubramanian5');

$sql = "SELECT Title, Query, Response FROM Queries";
$records=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($records))
{
  echo "<tr>";
  echo "<td>".$row['Title']."</td>";
  echo "<td>".$row['Query']."</td>";
  echo "<td>".$row['Response']."</td>";
  echo "</tr>";
}
mysqli_close($con);
?>

</table>
</div>

</body>
</html>