<!--<html>
<body>

Welcome <?php echo $_POST["firstname"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

-->
<?php

// Get inputs and validate
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$password = hash('sha512', $_POST["password"]);
$zip = $_POST["zip"];


if(!isValidEmail($email)) {
    exitWithMessage("Please enter a valid email.");
}elseif (isValidName($firstname)) {
    exitWithMessage("Please enter a valid first name (Names cannot contain numbers).");
}elseif (isValidName($lastname)) {
    exitWithMessage("Please enter a valid last name (Names cannot contain numbers).");
}elseif (!preg_match('/^\d{5}$/', $zip)) { // Zip contains only numbers and 5 digits
    exitWithMessage("Please enter a valid 5 digit zip code.");
}

// Database
$servername = "localhost:3306"; //local machine, the port on which the mySQL server runs on
$username = "root"; //default is root
$serverpassword = ""; //default is none
$databasename = "testUsers";

$conn = new mysqli($servername, $username, $serverpassword, $databasename); //creates the connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  //checks the connection



$sql = "INSERT INTO `userAll`(`firstname`, `lastname`, `email`, `zipcode`, `passwordhash`) VALUES ('$firstname', '$lastname', '$email', '$zip', '$password')"; //Queries must be in string format
$result = mysqli_query($conn, $sql); //does your query

if ($result) { //checks your query
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

function isValidName($name){ //Name contains no numbers
    return preg_match('/\\d/', $String) <= 0;
}

function isValidEmail($email) { //Email has @ and some website, plus some other stuff I think
    return filter_var($email, FILTER_VALIDATE_EMAIL) 
        && preg_match('/@.+\./', $email);
}

function exitWithMessage($message) { //Shows popup with message, then goes back to original page
    echo "<script type=\"text/javascript\">alert(\"$message\");history.go(-1);</script>";
    exit();
}


?>
<!--
</body>
</html>
-->