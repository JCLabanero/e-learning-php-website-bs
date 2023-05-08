<?php
$xml = new DOMDocument();
$xml->load("../xml/accounts.xml");

$emailExists = false;
$emailExists = false;
if(isset($_POST['add'])){
	$password = $_POST['password'];
	$c_password = $_POST['c_password'];
}
if($username == ''){
    $errors[] = 'Username is blank';
}
if($email == ''){
    $errors[] = 'Email is blank';
}
if($password == '' || $c_password == ''){
    $errors[] = 'Passwords are blank';
}
if($password != $c_password){
    $errors[] = 'Passwords do not match';
}
if(!isset($_FILES['image'])){
    $errors[] = 'image not set';
}
foreach ($xml->getElementsByTagName("email") as $node) {
    if ($node->nodeValue == $_POST["email"]) {
        $emailExists = true;
        break;
    }
}
$image_path = "../massets/images/";
if ($_FILES["image"]["error"] === UPLOAD_ERR_OK) {
    $image_name = $_FILES['image']['name'];
    $image_path .= $image_name;
} else {
    $errors[] = 'Image error';
}

if ($emailExists) {
    header("Location: ../register.php?error=email-exists");
    exit();
} else {
    $account = $xml->createElement("account");

    $username = $xml->createElement("username", $_POST["username"]);
    $email = $xml->createElement("email", $_POST["email"]);
    $password = $xml->createElement("password", md5($_POST["password"]));
    $fname = $xml->createElement("fname", $_POST["fname"]);
    $lname = $xml->createElement("lname", $_POST["lname"]);
    $nName = $xml->createElement("nName", $_POST["nName"]);
    $age = $xml->createElement("age", $_POST["age"]);
    $image = $xml->createElement("imagePath", $image_path);

    $account->appendChild($username);
    $account->appendChild($email);
    $account->appendChild($password);
    $account->appendChild($fname);
    $account->appendChild($lname);
    $account->appendChild($nName);
    $account->appendChild($image);
    $account->appendChild($age);

    $xml->getElementsByTagName("accounts")[0]->appendChild($account);
    $xml->save("../xml/accounts.xml");

    header("Location: ../index.php");
    exit();
}
?>