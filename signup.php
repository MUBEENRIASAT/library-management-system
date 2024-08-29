<?php
session_start();
include("db.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{
$Username=$_POST['Username'];
$Password=$_POST['Password'];
$E_mail=$_POST['E_mail'];
if(!empty($E_mail) && !empty($Password) && !lis_numeric($Password))
{

$query="INSERT INTO `signuptable` (`Username`, `Password`, `E_mail`) VALUES('$Username','$Password','$E_mail')";
mysqli_connect($con,$query);
echo "<script type='text/javascript'> alert('successfully registered') </script>";
}
else{
    echo "<script type='text/javascript'> alert('please enter valid information') </script>";
}
}
?>
<!DOCTYPE html>
<html lang="post">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style up.css">
</head>
<form action= "signup.php" method="post">
<div class="L" name="nav" id="nav">
<nav class="L">
<ul>
<li class="L"> <a href="sibnin.html">Signin</a></li>
<li class="L"> <a href="signup.html">SignUp</a></li>
<li class="L"> <a href="SMS HOME.html">Search</a></li>
<li class ="L"><a href="library.html">Home </a></li>
<li class ="L"><a href="help.html">Help</a><li>
</ul>
</nav>
</form>
</div>
    <h1><u>User Information</u></h1>
    <br><br>
<div>
    <form action="signup.php" method="post">
        <label for="username"><b>Username</b></label>
<input type="text" placeholder="Enter the Username" id="username" name="username">
<br><br>
    <label for="password"><b>Password</b></label>
<input type="text" placeholder="Enter  the Password" id="password" name="password"> 
<br><br>
<label for="password"><b>E-Mail</b></label>
<input type="text" placeholder="Enter your E-Mail" id="password" name="email"> 
</form>
<br><br>
</div>
<br><br>
<div>
<button><a href="SMS HOME.php">Submit</a>></button>
</div>
 </body>
</html>
