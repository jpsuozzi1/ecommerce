<?php

session_start();

$email = $_POST["email"];
$password = hash('sha512', $_POST["password"]);


// Database
$servername = "localhost:3306"; //local machine, the port on which the mySQL server runs on
$username = "root"; //default is root
$serverpassword = ""; //default is none
$databasename = "siteUsers";

$conn = new mysqli($servername, $username, $serverpassword, $databasename); //creates the connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  //checks the connection

// Check if provided email is in database
$sqlSelectUser = "SELECT * FROM `currentCustomers` WHERE `email` = '$email'";
$resultSelectUser = mysqli_query($conn, $sqlSelectUser);

if($resultSelectUser) {
    if(mysqli_num_rows($resultSelectUser)){
        $row = mysqli_fetch_assoc($resultSelectUser);
    	if ($row['password'] == $password) { 
                $firstname = $row['firstname'];
    			$_SESSION['user'] = $email;
                $_SESSION['firstname'] = $firstname;
                $name = $_SESSION['firstname'];
    			header("location: member-home.php");
    	} else {
    		exitWithMessage("The password you entered is incorrect.");
    	}
    } else {
    	exitWithMessage("The email you entered is incorrect.");
    }
} else {
    echo "Error: " . $sqlSelectUser . "<br>" . mysqli_error($conn);
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

?>