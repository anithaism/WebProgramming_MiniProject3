<?php
// unset cookies
if (isset($_SERVER['HTTP_COOKIE'])) {
    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
    foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        setcookie($name, '', time()-1000);
        setcookie($name, '', time()-1000, '/');
    }
}

?>


<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Login Page</title>
</head>

<body>
<div class="loginpage">

<div id="mySidenav" class="sidenav">
  <a href="index.html" id="home">Home</a>
  <a href="about.php" id="about">About</a>
  <a href="recipeindex.php" id="index">Recipe Index</a>
  <a href="recipecategories.php" id="categories">Recipe Categories</a>
  <a href="postquery.php" id="postquery">Post Query</a>
</div>

 <div class="transbox">
    <p>Enter your login details</p>
   <form method="post" action="<?=$_SERVER['PHP_SELF'];?>" class="formLayout">
   <div class="formGroup">
   <label>User name:</label>
   <input type="text" name="username" value="<?php echo $fname ?>" placeholder="username" required autofocus /><br>
      </div>
   <div class="formGroup">
   <label>Password:</label>
   <input type="password" name="password" placeholder="password" required /><br>
  
   </div>
   <div class="formGroup1">
   <button type="submit" name="submit" value="Submit">Login</button>

   <button type="cancel" name="cancel" value="Cancel">Cancel</button>
   </div>
   </form>
  </div>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
$name = $_POST['username'];
$pwd = $_POST['password'];


$con = mysqli_connect('localhost','asubramanian5','asubramanian5','asubramanian5');

$sql = "SELECT * FROM Users WHERE Username ='$name' AND Password ='$pwd' ";
$records=mysqli_query($con,$sql);


if(mysqli_num_rows($records) > 0)
{
session_start();

setcookie('name',$_POST['username']);

$_SESSION['username'] = $_POST['username'];
echo "redirect";

 if(isset($_SESSION['username']) == true) {
        header("location: about.php");

    }
}
else
{
 echo "<p class='emsg'>Please enter Correct Username and Password! </p>";
}

mysqli_close($con);

}
?>


</div>

</body>
</html>