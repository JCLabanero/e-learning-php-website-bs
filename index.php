<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body class="d-flex flex-column h-100">
    <header>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container-xl">
                <a class="navbar-brand text-light" href="./index.php">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link text-light" aria-current="page" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="./pages/about_us.php">About us</a>
                        </li>
                    </ul>
                    <a href="./pages/login.php" class="btn btn-primary text-light me-2">Login</a>
                    <a href="./pages/register.php" class="btn text-light btn-outline-primary">Register</a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="bg-dark text-light p-5 text-center text-md-start">
            <div class="container col-xxl-8 px-4 py-5">
                <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                  <div class="col-10 col-sm-8 col-lg-6">
                    <img src="./images/undraw_road_to_knowledge_m8s0.svg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                  </div>
                  <div class="col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-3">Learn how to code and build skills in<br><span class="text-primary">&#60;programming&#62;</span></h1>
                    <p class="lead"> Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular
                      front-end open source toolkit, featuring  Sass variables and mixins, responsive grid system, extensive prebuilt
                      components, and powerful JavaScript plugins.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                      <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Learn more</button>
                      <button type="button" class="btn btn-outline-primary btn-lg px-4">Get Started</button>
                    </div>
                  </div>
                </div>
              </div>
        </section>
        <section class="p-5 p-md-3 m-0 m-md-5 text-center">
            <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center">
                <div class="col-lg-5 p-1 p-lg-3 mx-auto my-5">
                  <h1 class="display-4 fw-normal">Our Mission</h1>
                  <p class="lead fw-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple’s marketing pages.</p>
                  <a class="btn btn-secondary" href="#">Learn More</a>
                </div>
                <div class="product-device shadow-sm d-none d-md-block"></div>
                <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
              </div>
        </section>
        <section class="m-5">
            <div class="container px-4 py-5" id="hanging-icons">
                <h2 class="pb-2 border-bottom">Hanging icons</h2>
                <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                  <div class="col d-flex align-items-start">
                    <div class="icon-square text-body-emphasis d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                        <h1><i class="bi bi-lightbulb-fill"></i></h1>
                    </div>
                    <div>
                      <h3 class="fs-2">Featured title</h3>
                      <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                      <a href="#" class="btn btn-secondary">
                        Primary button
                      </a>
                    </div>
                  </div>
                  <div class="col d-flex align-items-start">
                    <div class="icon-square text-body-emphasis d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                        <h1 class="text-center m-0"><i class="bi bi-palette-fill"></i></h1>
                    </div>
                    <div>
                      <h3 class="fs-2">Featured title</h3>
                      <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                      <a href="#" class="btn btn-secondary">
                        Primary button
                      </a>
                    </div>
                  </div>
                  <div class="col d-flex align-items-start">
                    <div class="icon-square text-body-emphasis d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                        <h1 class="text-center m-0"><i class="bi bi-lightbulb-fill"></i></h1>
                    </div>
                    <div>
                      <h3 class="fs-2">Featured title</h3>
                      <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                      <a href="#" class="btn btn-secondary">
                        Primary button
                      </a>
                    </div>
                  </div>
                </div>
              </div>
        </section>
    </main>
    <footer class="d-flex flex-wrap justify-content-between align-items-center p-2 border-top">
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
    <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>