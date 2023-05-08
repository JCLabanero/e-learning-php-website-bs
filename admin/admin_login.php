<?php

    session_start(); // Start the session


    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $hashed_password = md5($password);
    
        // Load the XML file
        $xml = simplexml_load_file('../xml/admins.xml');
    
        // Search for the user in the XML file
        $users = $xml->xpath("//account[email='$email' and password='$hashed_password']");
    
        if (count($users) == 1) {
            // User exists, set the session variables
            $_SESSION['admin'] = $email;
            $_SESSION['logged_in'] = true;
            // Redirect to dashboard
            header('Location: admin_home.php');
            exit();
        } else {
            // Invalid login, redirect back to login form
            echo 'INVALID BES';
            exit();
        }
    }
?>

<form method="post">
<input type="email" name="email"><br/>
<input type="password" name="pass"><br/>
<input type="submit">
</form>