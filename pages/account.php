<?php
include_once '../includes/header_in.php';

$xml = simplexml_load_file('../xml/accounts.xml');

$account = $xml->account[0];

$email = $account->email;
$fname = $account->fname;
$lname = $account->lname;
$nname = $account->nName;
$age = $account->age;
$username = $account->username;
$dp = $account->imgPath;

?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Account</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="account_update.php" type="button" class="btn btn-sm btn-outline-secondary me-2">Edit Info</a>
            <a href="account_delete.php" class="btn btn-sm btn-outline-danger">
                <span data-feather="calendar" class="align-text-bottom"></span>
                Delete Account
            </a>
        </div>
    </div>
    <div class="card mb-3 border-0 rounded-0" style="max-width: 100%;">
        <div class="row g-0">
            <div class="col-auto">
                <?php echo '<img src="'.$dp.'" class="float-start" alt="...">'?>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h3>Email: <?php echo $email?></h3>
                    <h3>Full Name: <?php echo $fname.' '.$lname?></h3>
                    <h3>Nickname: <?php echo $nname?></h3>
                    <h3>Age: <?php echo $age?></h3>
                </div>
            </div>
            <div class="card-body border-0 pt-0">
                <h3>Username: <?php echo $username?></h3>
            </div>
        </div>
    </div>
    <!-- Show this if edit info true -->
    <div class="card mb-3 border-0 rounded-0" style="max-width: 100%;">
        <div class="row g-0">
            <div class="col-auto">
                <img src="https://picsum.photos/200" class="float-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h3>Full Name</h3>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" placeholder="Name"></textarea>
                    <h3>Contact</h3>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" placeholder="Contact"></textarea>
                    <h3>Biography</h3>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" placeholder="Biography"></textarea>
                </div>
            </div>
            <div class="card-body border-0 pt-0">
                <h3>Links</h3>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" placeholder="Links"></textarea>
            </div>
        </div>
    </div>
</main>
<?php
include_once '../includes/footer_in.php'
?>