<?php
    include_once 'includes/header.php';
?>
<main>
    <form method="post" action="../php/authenticate.php">
        <div class="card m-auto" style="max-width: 800px;">
            <div class="row g-0">
                <div class="col-md-5 pt-2 pt-md-5">
                    <img src="massets/images/undraw_login_re_4vu2.svg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title">Login an Account</h5>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Email@address.com" name="email"/>
                            <div id="emailHelp" class="form-text d-none d-sm-block">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password"/>
                        </div>
                        <input type="submit" class="btn btn-primary" value="login">
                    </div>
                </div>
            </div>
        </div>
    </form>
</main>
<?php
    include_once 'includes/footer.php';
?>