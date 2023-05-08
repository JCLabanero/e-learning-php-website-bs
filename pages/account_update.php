<?php
    include_once '../includes/header_in.php';
    //load xml file
    $file = simplexml_load_file('../xml/accounts.xml');

    foreach($file->account as $row){
        $row->fname;
        $row->lname;
        $row->username;
    }
?>
<main class="col">
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
        <div class="col w-auto w-sm-50 w-50 mx-auto mt-5">
            <form method="post" action="../php/update_this_account.php" enctype="multipart/form-data">
                <div class="card mx-auto" style="max-width: 800px;">
                    <div class="row g-0">
                        <div class="col-md-5 pt-2 pt-md-5">
                        <?php echo '<img src="../massets/images/'.$row->imgPath.'" class="float-start" alt="Image couldn\'t display">'?>
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h5 class="card-title">Update Profile</h5>
                                <div class="mb-2">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <div class="input-group mb-0">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" name="email" value="<?php echo $row->email; ?>" required>     
                                    </div>
                                    
                                </div>
                                <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1"
                                        aria-describedby="emailHelp"  name="username" value="<?php echo $row->username; ?>" readonly>
                                </div>
                                
                                
                                <div class="input-group mb-2">
                                <span class="input-group-text"><p class="m-0 d-none d-sm-flex">First and last name</p><p class="m-0 d-flex d-sm-none">CN</p></span>
                                    <input type="text" aria-label="First name" class="form-control" placeholder="First Name" name="fname" required>
                                    <input type="text" aria-label="Last name" class="form-control"  placeholder="Last Name" name="lname" required>
                                </div>
                                <div class="row g-1">
                                <div class="col-sm-8 mb-2">
                                    <label for="exampleInputText" class="form-label">Nickname</label>
                                    <input type="text" class="form-control" id="exampleInputText"
                                        aria-describedby="emailHelp" placeholder="Nickname" name="nName">
                                </div>
                                <div class="col-sm-4 mb-2">
                                    <label for="exampleInputNumber" class="form-label">Age</label>
                                    <input type="number" class="form-control" id="exampleInputNumber"
                                        aria-describedby="emailHelp" placeholder="Age" name="age">
                                </div>
                                <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">Upload Photo:</label>
                                    <input type="file" class="form-control" id="exampleInputPassword1"
                                        aria-describedby="emailHelp" placeholder="Upload Photo" name="image">
                                </div>
                                <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">Old Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                        aria-describedby="emailHelp" placeholder="Password" name="o_password" required>
                                </div>
                                <div class="mb-2">
                                    <label for="exampleInputPassword2" class="form-label">New Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword2"
                                        aria-describedby="emailHelp" placeholder="Password" name="password" required>
                                </div>
                                <div class="mb-2">
                                    <label for="exampleInputPassword3" class="form-label">Confirm New Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword3"
                                        aria-describedby="emailHelp" placeholder="Confirm Password" name="c_password" required>
                                </div>

                                </div>
                                <a href=""><button type="submit" name="update" class="btn btn-primary">Update</button></a>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
</main>
<?php
    include_once '../includes/footer_in.php';
?>