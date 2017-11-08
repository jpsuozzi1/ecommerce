<?php

session_start();

if (session_destroy()) {
	header("location: index.html");
} else {
	header("location: member-home.php");
}

?>