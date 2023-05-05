<?php
$xml = new DOMDocument();
$xml->load("../xml/accounts.xml");

$emailExists = false;
foreach ($xml->getElementsByTagName("email") as $node) {
    if ($node->nodeValue == $_POST["email"]) {
        $emailExists = true;
        break;
    }
}

if ($emailExists) {
    header("Location: ../register.php?error=email-exists");
    exit();
} else {
    $account = $xml->createElement("account");

    $email = $xml->createElement("email", $_POST["email"]);
    $password = $xml->createElement("password", md5($_POST["password"]));
    $fName = $xml->createElement("fName", $_POST["fName"]);
    $lName = $xml->createElement("lName", $_POST["lName"]);
    $nName = $xml->createElement("nName", $_POST["nName"]);
    $age = $xml->createElement("age", $_POST["age"]);

    $account->appendChild($email);
    $account->appendChild($password);
    $account->appendChild($fName);
    $account->appendChild($lName);
    $account->appendChild($nName);
    $account->appendChild($age);

    $xml->getElementsByTagName("accounts")[0]->appendChild($account);
    $xml->save("../xml/accounts.xml");

    header("Location: ../index.php");
    exit();
}
?>