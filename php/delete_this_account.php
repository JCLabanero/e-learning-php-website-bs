<?php
	session_start();
    if(isset($_POST['delete'])){
        $password = $_POST['password'];
        $c_password = $_POST['c_password'];
    }
    if($password != $c_password){
		$errors[] = 'Passwords do not match';
	}
    else {
        
    
	$id = $_REQUEST['username'];

	$users = simplexml_load_file('../xml/accounts.xml');

	//we're are going to create iterator to assign to each user
	$index = 0;
	$i = 0;

	foreach($users->account as $user){
		if($user->username == $id){
			$index = $i;
			break;
		}
		$i++;
	}

	unset($users->account[$index]);
	file_put_contents('../xml/accounts.xml', $users->asXML());
    session_destroy();
	header('Location: ../login.php');
}

?>