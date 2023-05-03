<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body class="d-flex flex-column h-100 text-center">
    <div class="d-flex w-100 h-100 mx-auto flex-column">
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
        <main class="float-right">
            <div class="card border border-0">
                <img src="../images/undraw_people_re_8spw.svg" class="card-img h-100 w-50 mx-auto d-none d-sm-block" alt="...">
                <div class="card-img-overlay text-primary d-flex align-items-center w-75 mx-auto">
                    <div class="text-lg-start">
                        <h1 class="card-title">About Us</h1>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This
                            content is a little bit longer. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia numquam necessitatibus
                            veritatis sit velit sint repudiandae nisi voluptatem ad mollitia quisquam laudantium, laborum, blanditiis corporis
                            maxime non vero cumque amet delectus aliquam. Enim provident praesentium autem ipsa illum veritatis distinctio
                            corrupti est alias, numquam molestiae possimus. Ipsam quidem minus dolorum!</p>
                    </div>
                </div>
              </div>
            <!-- <h1>About Us</h1>
            <p class="m-0">Lorem ipsum dolor sit amet.</p>
            <img src="./images/undraw_people_re_8spw.svg" alt="..."> -->
        </main>
        <footer class="d-flex flex-wrap justify-content-between align-items-center p-2 border-top mt-auto">
            <p class="col-md-4 mb-0 text-muted">© 2021 WebsiteName, All Rights Reserved.</p>
        
            <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
              <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <ul class="nav col-md-4 justify-content-end">
              <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
              <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
              <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
            </ul>
        </footer>
    </div>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>