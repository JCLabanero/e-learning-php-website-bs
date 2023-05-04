<?php
    // Start the session
    session_start(); 

    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $hashed_password = md5($password);
    // Load the XML file
    $xml = simplexml_load_file('../xml/accounts.xml');
    // Search for the user in the XML file
    $users = $xml->xpath("//account[email='$email' and password='$hashed_password']");

    if (count($users) == 1) {
    // User exists, set the session variables
    $_SESSION['email'] = $email;
    $_SESSION['logged_in'] = true;

    // Redirect to dashboard
    header('Location: ../pages/homepage.php');
    exit();
    } else {
    // Invalid login, redirect back to login form
    // header('Location: ../index.php');
    // alert("Account doesn't exist"+$users);
    exit();
    }
?>
