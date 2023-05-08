<?php
    include_once '../includes/header_in.php';
?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col w-50 mx-auto">
                    <form method="post" action="../php/delete_this_account.php" enctype="multipart/form-data">
                        <div class="card mx-auto" style="max-width: 800px;">
                            <div class="row g-0">
                                <div class="col-md-5 pt-2 pt-md-5">
                                    
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <h5 class="card-title">Delete Account</h5>
                                        <?php
                                        
                                        //load xml file
                                        $file = simplexml_load_file('../xml/accounts.xml');
                    
                                        foreach($file->account as $row){
                                            $row->fname;
                                            $row->lname;
                                            $row->username;
                                        }

                                        ?>
                                        <div class="mb-2">
                                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                                            <div class="input-group mb-0">
                                                <span class="input-group-text" id="basic-addon1">@</span>
                                                <input type="email" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" name="email" value="<?php echo $row->email; ?>" readonly>     
                                            </div>
                                            
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputPassword1" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1"
                                                aria-describedby="emailHelp"  name="username" value="<?php echo $row->username; ?>" readonly>
                                        </div>
                                        
                                        <div class="mb-2">
                                            <label for="exampleInputPassword1" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1"
                                                aria-describedby="emailHelp" required placeholder="Password" name="password">
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputPassword1" class="form-label">Confirm New Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1"
                                                aria-describedby="emailHelp" required placeholder="Confirm Password" name="c_password">
                                        </div>

                                        </div>
                                        <a href=""><button type="submit" name="delete" class="btn btn-primary">Delete</button></a>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
    include_once '../includes/footer_in.php';
?>