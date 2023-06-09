<?php
    include_once 'includes/header.php';
?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col w-50 mx-auto">
                    <form method="post" action="php/create_new_account.php" enctype="multipart/form-data">
                        <div class="card mx-auto" style="max-width: 800px;">
                            <div class="row g-0">
                                <div class="col-md-5 pt-2 pt-md-5">
                                    <img src="massets/images/undraw_going_up_re_86kg.svg" class="img-fluid rounded-start w-75" alt="...">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <h5 class="card-title">Register an Account</h5>
                                        <div class="mb-2">
                                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                                            <div class="input-group mb-0">
                                                <span class="input-group-text" id="basic-addon1">@</span>
                                                <input type="email" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" placeholder="Email@address.com" name="email">    
                                            </div>
                                            <div id="emailHelp" class="form-text d-none d-sm-block">We'll never share your email with anyone else.
                                            </div>
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputPassword1" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1"
                                                aria-describedby="emailHelp" required placeholder="Username" name="username">
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputPassword1" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1"
                                                aria-describedby="emailHelp" placeholder="Password" name="password">
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1"
                                                aria-describedby="emailHelp" required placeholder="Confirm Password" name="c_password">
                                        </div>
                                        <div class="input-group mb-2">
                                        <span class="input-group-text"><p class="m-0 d-none d-sm-flex">First and last name</p><p class="m-0 d-flex d-sm-none">CN</p></span>
                                            <input type="text" aria-label="First name" class="form-control" placeholder="First Name" name="fname">
                                            <input type="text" aria-label="Last name" class="form-control"  placeholder="Last Name" name="lname">
                                        </div>
                                        <div class="row g-1">
                                        <div class="col-sm-8 mb-2">
                                            <label for="exampleInputText" class="form-label">Nickname</label>
                                            <input type="text" class="form-control" id="exampleInputText"
                                                aria-describedby="nicknameHelp" placeholder="Nickname" name="nName">
                                        </div>
                                        <div class="col-sm-4 mb-2">
                                            <label for="exampleInputNumber" class="form-label">Age</label>
                                            <input type="number" class="form-control" id="exampleInputNumber"
                                                aria-describedby="ageHelp" placeholder="Age" name="age">
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputPassword1" class="form-label">Upload Photo:</label>
                                            <input type="file" class="form-control" id="exampleInputPassword1"
                                                aria-describedby="photoHelp" required placeholder="Upload Photo" name="image">
                                        </div>
                                        </div>
                                        <button type="submit" name="add" class="btn btn-primary">Register</button>
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
    include_once 'includes/footer.php';
?>