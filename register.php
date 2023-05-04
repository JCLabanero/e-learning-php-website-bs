<?php
    include_once 'includes/header.php';
?>
<main>
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col w-50 mx-auto">
                    <form>
                        <div class="card mb-3 mx-auto" style="max-width: 800px;">
                            <div class="row g-0">
                                <div class="col-md-5 pt-2 pt-md-5">
                                    <img src="massets/images/undraw_going_up_re_86kg.svg" class="img-fluid rounded-start w-75" alt="...">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <h5 class="card-title">Register an Account</h5>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Email@address.com">
                                            <div id="emailHelp" class="form-text d-none d-sm-block">We'll never share your email with anyone else.
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1"
                                                aria-describedby="emailHelp" placeholder="Password">
                                        </div>
                                        <!-- <div class="d-block d-sm-flex"> -->
                                            <button type="submit" class="btn btn-primary">Register</button>
                                        <!-- </div> -->
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