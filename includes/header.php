<?php
    require 'php/session_check_in.php'
?>
<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body class="d-flex flex-column h-100">
    <header class="mb-auto">
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container-xl">
                <a class="navbar-brand text-light" href="index.php">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link text-light" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="about_us.php">About us</a>
                        </li>
                    </ul>
                    <a href="login.php" class="btn btn-primary text-light me-2">Login</a>
                    <a href="register.php" class="btn text-light btn-outline-primary">Register</a>
                </div>
            </div>
        </nav>
    </header>