<?php
    $xml = new domdocument("1.0");
    $xml->load("../xml/accounts.xml");

    $email = $_POST['email'];
    $password = $_POST['password'];

    $allaccounts = $xml->getElementsByTagName("account");

    session_start(); 

    foreach ($allaccounts as $account) {
        $xmlemail = $account->getElementsByTagName("email")->item(0)->nodeValue;
        $xmlpass = $account->getElementsByTagName("password")->item(0)->nodeValue;
        if($email==$xmlemail && md5($password)==$xmlpass){
            $_SESSION['email'] = $email;
            $_SESSION['logged_in'] = true;

            header('Location: ../pages/homepage.php');
            exit("logged in successfully");
        }
    }
    header('Location: ../pages/login.php');
    exit();
?>
