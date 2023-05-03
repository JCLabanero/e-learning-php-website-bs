<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body class="d-flex flex-column h-100">
    <header class="mb-auto">
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container-xl">
                <a class="navbar-brand text-light" href="../index.php">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link text-light" aria-current="page" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="./about_us.php">About us</a>
                        </li>
                    </ul>
                    <a href="./login.php" class="btn btn-primary text-light me-2">Login</a>
                    <a href="./register.php" class="btn text-light btn-outline-primary">Register</a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col w-50 mx-auto">
                        <form>
                            <div class="card mb-3 mx-auto mt-5" style="max-width: 800px;">
                                <div class="row g-0">
                                    <div class="col-md-5 pt-2 pt-md-5">
                                        <img src="../images/undraw_login_re_4vu2.svg" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body">
                                            <h5 class="card-title">Login an Account</h5>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" placeholder="Email@address.com">
                                                <div id="emailHelp" class="form-text d-none d-sm-block">We'll never share your email with anyone else.
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Log In</button>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
            
            
        </section>
    </main>
    <footer>
        <!-- ... -->
    </footer>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>