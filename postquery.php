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


<div class="forum">

<div class="discussionhead">
<p>Post your Queries here</p>
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



<div class="formtopost">

<form method="post" action="<?=$_SERVER['PHP_SELF'];?>">
<p>Your E-mail Address:</p>
<input type="email" name="topic_owner" size=40 maxlength=150 required>
<p>Query Title:</p> 
<input type="text" name="topic_title" size=40 maxlength=150 required>
<p>Post Your Query Here:</p>
<textarea name="post_text" rows=8 cols=40 wrap=virtual required></textarea>
<p><input type="submit" name="submit" value="Add Topic"></p>
<p><a href="response.php">Click here</a> to check for already posted queries and responses </p>
</form>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
$email = $_POST['topic_owner'];
$title = $_POST['topic_title'];
$querytext = $_POST['post_text'];
$submit = $_POST['submit'];
}
if($submit=="Add Topic")
{
$con = mysqli_connect('localhost','asubramanian5','asubramanian5','asubramanian5');


$sql = "INSERT INTO Queries (Email, Title, Query) VALUES ('$email', '$title', '$querytext')";
$records=mysqli_query($con,$sql);

mysqli_close($con);
}
?>


</div>


</body>
</html>