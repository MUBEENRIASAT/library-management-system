
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signin</title>
    <link rel="stylesheet" href="style in.css"/>
</head>
<body background="gblue.jpeg">
    <form action="/server">
        <div class="L" name="nav" id="nav">
        <nav class="L">
        <ul>
        <li class="L"> <a href="sibnin.php">Signin</a></li>
        <li class="L"> <a href="signup.php">SignUp</a></li>
        <li class="L"> <a href="SMS HOME.html">Search</a></li>
        <li class ="L"><a href="library.html">Home </a></li>
        <li class ="L"><a href="help.html">Help</a><li>
        </ul>
        </nav>
        </form>
        </div>
    <h1><u>STUDENT DATA</u></h1><br><br>
    <div>
<form action="/server">
<label for="name" ><b>Name:</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" placeholder="Enter your Name" id="name">
<br><br>
<label for="name" ><b>Father-Name:</b></label>&nbsp;&nbsp;&nbsp;
<input type="text" placeholder="Enter your F-Name" id="name">
<br><br>
<label for="Department"><b>Department:</b></label>&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" placeholder="Enter Department Name" id="name">
<br><br>
<label for="Roll No"><b>Roll NO:</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" placeholder="Enter Roll No" id="name">
<br><br>
<label for="Phone No" ><b>Phone No:</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" placeholder="Enter ph-No" id="ph-N">
<br><br>
<label for="email" ><b>E-mail:</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" placeholder="Enter-mail" id="email">
<br><br>
<div>
    <button> <a href="SMS HOME.php" >Submit</a></button>
</div>
</div>
</form>    
</body>
</html>
<?php
session_start();
include("db.php");
// Configuration
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'library management system';

// Connect to database
$con = new mysql($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Name = $_POST['Name'];
    $Father_Name = $_POST['Father_Name'];
    $Department = $_POST['Department'];
    $Roll_No = $_POST['Roll_No'];
    $Phone_No = $_POST['Phone_No'];
    $E_mail = $_POST['E_mail'];

    // Validate input
    if (empty($Name) || empty($Father_Name) || empty($Department) || empty($Roll_No) ||empty($Phone_No)|| empty($E_mail)) {
        echo "Please fill in all fields.";
    } else {
        // Insert into database
        $sql = "INSERT INTO `signin` (`Name:`, `Father_Name:`, `Department:`, `Roll_No:`, `Phone_No:`, `E_mail:`)VALUES ('$Name', '$Father_Name', '$Department', '$Roll_No','$Phone_No','$E_mail')";
        if ($conn->query($sql) === TRUE) {
            echo "Student information added successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Close connection
$con->close();
?>