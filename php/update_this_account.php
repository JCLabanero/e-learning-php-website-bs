<?php
	session_start();
    $is_updated=false;
	if(isset($_POST['update'])){
		$accounts = simplexml_load_file('../xml/accounts.xml');
		foreach($accounts->account as $account){

			if($account->username == $_POST['username']){
                if($account->password!=$_POST['o_password']){
                    $is_updated=false;
                    echo '<script>alert("Account updated")</script>';
                    break;
                }
				$account->email = $_POST['email'];
				$account->fname = $_POST['fname'];
				$account->lname = $_POST['lname'];
				$account->nName = $_POST['nName'];
				$account->age = $_POST['age'];
				$account->imgPath = $_FILES['image']['name'];
				$account->password = $_POST['password'];
                $is_updated=true;
				break;
			}
		}
        if($is_updated==true){
            echo '<script>alert("Account updated")</script>';
            file_put_contents('../xml/accounts.xml', $accounts->asXML());
            $_SESSION['message'] = 'Member updated successfully';
            header('location: ../pages/account_update.php');
        } else {
            echo '<script>alert("Update failed")</script>';
        }
	}
?>