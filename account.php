<?php

session_start();

// print_r($_SESSION);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./styles/main.css" >
</head>
<body>
    <?php if (isset($_SESSION["user_id"])): ?>
    <section class="vh-100" style="background-color: #f4f5f7;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-6 mb-4 mb-lg-0">
                <div class="card mb-3" style="border-radius: .5rem;">
                <div class="row g-0">
                    <div class="col-md-4 gradient-custom text-center text-white"
                    style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                    <!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                        alt="Avatar" class="img-fluid my-5" style="width: 80px;" /> -->
                    <i class="bi bi-person-circle text-dark" style="font-size: 64px;"></i>
                    <h5 style="color: black">
                        <?= $_SESSION["user_first_name"] . " " . $_SESSION["user_last_name"] ?>
                    </h5>
                    <p style="color: black">Web User</p>
                    <i class="far fa-edit mb-5"></i>
                    </div>
                    <div class="col-md-8">
                    <div class="card-body p-4" style="background-color: black;">
                        <h6 style="color: white">Information</h6>
                        <hr class="mt-0 mb-4">
                        <div class="row pt-1">
                        <div class="col-6 mb-3">
                            <h6 style="color: white">Birthdate</h6>
                            <p class="text" style="color: white">
                                <?= $_SESSION["user_birthdate"] ?>
                            </p>
                        </div>
                        <div class="col-6 mb-3">
                            <h6 style="color: white">Age</h6>
                            <p class="text" style="color: white">
                                <?= $_SESSION["user_age"] ?>
                            </p>
                        </div>
                        </div>
                        <h6 style="color: white">Contact Information</h6>
                        <hr class="mt-0 mb-4">
                        <div class="row pt-1">
                        <div class="col-6 mb-3">
                            <h6 style="color: white">Contact Num:</h6>
                            <p class="text" style="color: white">
                                <?= $_SESSION["user_contact"] ?>
                            </p>
                        </div>
                        <div class="col-6 mb-3">
                            <h6 style="color: white">Email</h6>
                            <p class="text" style="color: white">
                                <?= $_SESSION["user_email"] ?>
                            </p>
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
                <button type="button" class="btn btn-primary" onclick="window.location.href='./logout.php'">
                Logout
                </button>

                <button type="button" class="btn btn-secondary" onclick="window.location.href='./main.php'">
                Home
                </button>
            </div>
            </div>
        </div>
    </section>
    
    <?php else: ?>
    <section class="vh-100" style="background-color: #f4f5f7;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-6 mb-4 mb-lg-0">
                <div class="card mb-3" style="border-radius: .5rem;">
                <div class="row g-0">
                    <div class="col-md-4 gradient-custom text-center text-white"
                    style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                    <!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                        alt="Avatar" class="img-fluid my-5" style="width: 80px;" /> -->
                    <i class="bi bi-person-circle text-dark" style="font-size: 64px;"></i>
                    <h5 style="color: black">Unknown: Login Required!</h5>
                    <p style="color: black">Web User</p>
                    <i class="far fa-edit mb-5"></i>
                    </div>
                    <div class="col-md-8">
                    <div class="card-body p-4" style="background-color: black;">
                        <h6 style="color: white">Information</h6>
                        <hr class="mt-0 mb-4">
                        <div class="row pt-1">
                        <div class="col-6 mb-3">
                            <h6 style="color: white">Birthdate</h6>
                            <p class="text" style="color: white">???</p>
                        </div>
                        <div class="col-6 mb-3">
                            <h6 style="color: white">Age</h6>
                            <p class="text" style="color: white">???</p>
                        </div>
                        </div>
                        <h6 style="color: white">Contact Information</h6>
                        <hr class="mt-0 mb-4">
                        <div class="row pt-1">
                        <div class="col-6 mb-3">
                            <h6 style="color: white">Contact Num:</h6>
                            <p class="text" style="color: white">???</p>
                        </div>
                        <div class="col-6 mb-3">
                            <h6 style="color: white">Email</h6>
                            <p class="text" style="color: white">???</p>
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
                <button type="button" class="btn btn-primary" onclick="window.location.href='./login.php'">
                Login
                </button>

                <button type="button" class="btn btn-secondary" onclick="window.location.href='./main.php'">
                Home
                </button>
            </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
</body>
</html>