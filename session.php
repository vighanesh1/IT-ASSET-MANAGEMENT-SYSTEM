<?php
session_start(); // Start session

if(!isset($_SESSION['username'])) { // Check if user is not logged in
    header("Location: login.php"); // Redirect user to login page
    exit; // Stop script execution
}
?>