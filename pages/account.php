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
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <a href="account.php" class="h2 text-dark" style="text-decoration:none;">Account</a>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="account_update.php" type="button" class="btn btn-sm btn-outline-secondary me-2">Edit Info</a>
            <a href="account_delete.php" class="btn btn-sm btn-outline-danger">
                <span data-feather="calendar" class="align-text-bottom"></span>
                Delete Account
            </a>
        </div>
    </div>
    <!-- <div class="card mb-3 border-0 rounded-0" style="max-width: 100%;">
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
    </div> -->
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-6 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-white"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
              <h5>Marie Horwitz</h5>
              <p>Web Designer</p>
              <i class="far fa-edit mb-5"></i>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Information</h6>
                <hr class="mt-0 mb-2">
                <div class="row pt-1">
                    <h6>Email</h6>
                    <p class="text-muted"><?php echo $email?></p>
                </div>
                <div class="row pt-1">
                    <h6>Username</h6>
                    <p class="text-muted"><?php echo $username?></p>
                </div>
                <div class="row pt-1">
                    <h6>Full name</h6>
                    <p class="text-muted"><?php echo $fname.' '.$lname?></p>
                </div>
                <h6>Other Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Age</h6>
                    <p class="text-muted"><?php echo $age?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Nickname</h6>
                    <p class="text-muted"><?php echo $nname?></p>
                  </div>
                </div>
                <div class="d-flex justify-content-start">
                  <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</main>
<?php
include_once '../includes/footer_in.php'
?>