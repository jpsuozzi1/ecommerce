<?php

session_start();

$oldEmail = $_SESSION['email'];
$oldPassword = $_SESSION['password'];
$oldFirstname = $_SESSION['firstname'];
$oldLastname = $_SESSION['lastname'];

$newFirstname = $_POST['firstname'];
$newLastname = $_POST['lastname'];
$newEmail = $_POST['email'];
$newPassword = $_POST["password"];

if ($newEmail == '') {
    $newEmail = $oldEmail;
}
if ($newPassword == '') {
    $newPassword = $oldPassword;
}
if ($newFirstname == '') {
    $newFirstname = $oldFirstname;
}
if ($newLastname == '') {
    $newLastname = $oldLastname;
}

if(!isValidEmail($newEmail)) {
    exitWithMessage("Please enter a valid email.");
}elseif (!isValidFirstName($newFirstname)) {
    exitWithMessage("Please enter a valid first name. (Names must be between 2 and 30 characters and can only contain letters. Whitespace and hyphens are allowed for compound names.)");
}elseif (!isValidLastName($newLastname)) {
    exitWithMessage("Please enter a valid last name (Names must be between 2 and 30 characters and can only contain letters. Whitespace and hyphens are allowed for compound names., endings such as Jr and II are allowed.)");
}elseif (!isValidPassword($newPassword)) {
    exitWithMessage("Please enter a valid password that only contains letters, numbers and underscores, and is between 4 and 15 characters.");
}

$hashedNewPassword = hash('sha512', $newPassword);


// Database
$servername = "localhost:3306"; //local machine, the port on which the mySQL server runs on
$username = "root"; //default is root
$serverpassword = ""; //default is none
$databasename = "siteUsers";

$conn = new mysqli($servername, $username, $serverpassword, $databasename); //creates the connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  //checks the connection

// Update user query
$sqlUpdateUser = "UPDATE `currentCustomers` SET `email`='$newEmail', `password`='$hashedNewPassword', `firstname`='$newFirstname', `lastname`='$newLastname' WHERE `email` = '$oldEmail'";

if(mysqli_query($conn, $sqlUpdateUser)) {
	$_SESSION['email'] = $newEmail;
    $_SESSION['firstname'] = $newFirstname;
    $_SESSION['lastname'] = $newLastname;
    $_SESSION['password'] = $newPassword;
    $exitMessage = "Your account has been successfully updated!";
    echo "<script type=\"text/javascript\">alert(\"$exitMessage\");window.location.href = 'my-account.php';</script>";
} else {
    echo "Error: " . $sqlUpdateUser . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

exit();

function exitWithMessage($message) { //Shows popup with message, then goes back to original page
    echo "<script type=\"text/javascript\">alert(\"$message\");history.go(-1);</script>";
    exit();
}

function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}

function isValidEmail($email) { //Email has @ and some website, plus some other stuff I think
    return filter_var($email, FILTER_VALIDATE_EMAIL) 
        && preg_match('/@.+\./', $email);
}

function isValidPassword($pass) {
    return preg_match('/^[a-zA-Z]\w{3,14}$/', $pass);
}

function isValidFirstName($name){ //Name contains only letters, compound names are allowed with a hypen or space
    return preg_match('/^[a-zA-Z]+((\s|\-)[a-zA-Z]+)?$/', $name)
        && strlen($name) >= 2 && strlen($name) <= 15;
}

function isValidLastName($name){ //Name contains only letters, compound names are allowed with a hypen or space
    return preg_match('/^[a-zA-Z]+((((\-)|(\s))[a-zA-Z]+)?(,(\s)?(((j|J)|(s|S))(r|R)(\.)?|II|III|IV))?)?$/', $name)
        && strlen($name) >= 2 && strlen($name) <= 15;
}

?>