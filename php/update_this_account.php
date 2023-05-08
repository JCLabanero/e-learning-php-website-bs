<?php
	session_start();
	if(isset($_POST['update'])){
		$xml = simplexml_load_file('../xml/accounts.xml');
        $accounts = $xml->xpath("/accounts/account[email='".$_POST['email']."']");
        $old_password_hashed=md5($_POST['o_password']);
        if($_POST['password']!=$_POST['c_password']){
            echo '<script>alert("Confirm password not matched")</script>';
            return;
        }
        if($accounts[0]->password==$old_password_hashed){
            $accounts[0]->email = $_POST['email'];
            $accounts[0]->fname = $_POST['fname'];
            $accounts[0]->lname = $_POST['lname'];
            $accounts[0]->nName = $_POST['nName'];
            $accounts[0]->age = $_POST['age'];
            $accounts[0]->imgPath = $_FILES['image']['name'];
            $accounts[0]->password = md5($_POST['password']);
            $xml->asXML('../xml/accounts.xml');
            header('location: ../pages/account.php');
        } else {
            header('location: ../pages/account_update.php');
            return;
        }
	}
?>