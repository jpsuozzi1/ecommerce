<!--<html>
<body>

Welcome <?php echo $_POST["firstname"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

-->
<?php
//header("Location: ./index.html");
// Get inputs and validate
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$address = $_POST["address"];
$state = $_POST["state"];
$zip = $_POST["zip"];
$password = hash('sha512', $_POST["password"]);



if(!isValidEmail($email)) {
    exitWithMessage("Please enter a valid email.");
}elseif (!isValidFirstName($firstname)) {
    exitWithMessage("Please enter a valid first name. (Names must be between 2 and 30 characters and can only contain letters. Whitespace and hyphens are allowed for compound names.)");
}elseif (!isValidLastName($lastname)) {
    exitWithMessage("Please enter a valid last name (Names must be between 2 and 30 characters and can only contain letters. Whitespace and hyphens are allowed for compound names., endings such as Jr and II are allowed.)");
}elseif (!isValidAddress($address)) {
    exitWithMessage("Please enter a valid address (Can only contain letters, numbers, whitespace, hyphens, and pound signs.)");
}elseif (!isValidZip($zip)) { // Zip contains only numbers and 5 digits
    exitWithMessage("Please enter a valid 5 digit zip code.");
}

// Database
$servername = "localhost:3306"; //local machine, the port on which the mySQL server runs on
$username = "root"; //default is root
$serverpassword = ""; //default is none
$databasename = "siteUsers";

$conn = new mysqli($servername, $username, $serverpassword, $databasename); //creates the connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  //checks the connection

//Check if new email or already exists in database
$sqlSelect = "SELECT `email` FROM `currentCustomers` WHERE `email` = '$email'";
$resultSelect = mysqli_query($conn, $sqlSelect);

if($resultSelect) {
    if(mysqli_num_rows($resultSelect)){ //Email already exists
        exitWithMessage("Email already used, please enter a new email.");
    }
}else {
    echo "Error: " . $sqlSelect . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO `currentCustomers`(`firstname`, `lastname`, `email`, `address`, `state`, `zip`, `password`) VALUES ('$firstname','$lastname','$email','$address','$state','$zip','$password')"; //Queries must be in string format
$result = mysqli_query($conn, $sql); //does your query

if ($result) { //checks your query
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

$exitMessage = "Your account has been created, check your email for verification. Thank you!";
echo "<script type=\"text/javascript\">alert(\"$exitMessage\");window.location.href = './index.html';</script>"; //Redirect browser back to homepage
exit();

// Helper functions
function isValidName($name){ //Name contains no numbers
    return preg_match('/^[a-zA-Z\-\s]+$/', $name)
        && strlen($name) >= 2 && strlen($name) <= 15;
}

function isValidFirstName($name){ //Name contains only letters, compound names are allowed with a hypen or space
    return preg_match('/^[a-zA-Z]+((\s|\-)[a-zA-Z]+)?$/', $name)
        && strlen($name) >= 2 && strlen($name) <= 15;
}

function isValidLastName($name){ //Name contains only letters, compound names are allowed with a hypen or space
    return preg_match('/^[a-zA-Z]+((((\-)|(\s))[a-zA-Z]+)?(,(\s)?(((j|J)|(s|S))(r|R)(\.)?|II|III|IV))?)?$/', $name)
        && strlen($name) >= 2 && strlen($name) <= 15;
}

function isValidAddress($address) {
    return preg_match('/^[a-zA-Z0-9\s.#\-]+$/', $address);
}

function isValidEmail($email) { //Email has @ and some website, plus some other stuff I think
    return filter_var($email, FILTER_VALIDATE_EMAIL) 
        && preg_match('/@.+\./', $email);
}

function isValidZip($zip) {
    return preg_match('/^\d{5}$/', $zip);
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