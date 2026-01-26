<?php

session_start();

// print_r($_SESSION);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Weavile Project</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./styles/main.css" >
</head>
<body>
    
    <!-- <header>
        <h1>The Weavile Project</h1>
        <hr>
    </header> -->
    <section id="title">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none"> 
            <svg class="bi me-2" width="40" height="32" aria-hidden="true">
                <use xlink:href="#bootstrap"></use>
            </svg> 
            <span class="fs-4">The Weavile Project</span> 
        </a> 
        <ul class="nav nav-pills"> 
            <li class="nav-item">
                <a href="#" class="nav-link active bg-dark" aria-current="page">Home</a>
            </li> 
            <li class="nav-item">
                <a href="./account.php" class="nav-link text-dark">Account</a>
            </li> 
            <!-- <li class="nav-item">
                <a href="#" class="nav-link">Pricing</a>
            </li> 
            <li class="nav-item">
                <a href="#" class="nav-link">FAQs</a>
            </li> <li class="nav-item"> -->
                <a href="#" class="nav-link text-dark">About</a>
            </li> 
        </ul>
    </header>
    <div class="container col-xxl-8 px-4 py-5"> 
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5"> 
        <div class="col-10 col-sm-8 col-lg-6"> 
          <!-- <img src="bootstrap-themes.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy"> -->
           <video class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" autoplay muted loop>
            <source src="./assets/movingvid.mp4" type="video/mp4"/>
           </video>
           
        </div> 
        <div class="col-lg-6"> 
          <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">The Weavile Project</h1> 
          <p class="lead">Welcome to my website, where my mission is provide great art works to my lovely clients. Art is my passion and my greatest way of expression.</p> 
          <div class="d-grid gap-2 d-md-flex justify-content-md-start"> 
              <button type="button" class="btn btn-dark btn-lg px-4 me-md-2">Contact me</button> 
              <button type="button" class="btn btn-outline-secondary btn-lg px-4">Get Quote</button>
          </div> 
        </div> 
      </div> 
    </div>
  </section>
    <!-- <main>
        <div class="box1">
            <div class="text-area">
                <?php if (isset($_SESSION["user_id"])): ?>
                    <p class="first-name">
                        <?=  $_SESSION["user_last_name"]; ?>
                    </p>
                    <p class="last-name">
                        <?=  $_SESSION["user_first_name"]; ?>
                    </p>
                    <hr>
                    <p class="other-text">
                        There is a time for everything, and a season for every activity under the heavens.
                        <br>
                        - Ecclesiastes 3:1
                    </p>
                    <p><a href="logout.php">Log out</a></p>
                <?php else: ?>
                    <p class="first-name">The Weavile</p>
                    <p class="last-name">Project</p>
                    <hr>
                    <p class="other-text">
                        There is a time for everything, and a season for every activity under the heavens.
                        <br>
                        - Ecclesiastes 3:1
                    </p>
                    <div class="other-links">
                        <a href="./login.php">Log In</a> or
                        <a href="./signup.php">Sign Up</a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="vid-frame">
                <div class="vid-container" >
                    <video src="./assets/movingvid.mp4" autoplay loop muted></video>
                </div>
            </div>
        </div>
        
    </main> -->
    <!-- <section id="testimonial" class="bg-body-tertiary">
    <div class="container ">
      <div class="row">
        <div class="col-12">
          <h2>"I loved working with Dedouze, he's an amazing artist and very passionate about his works."</h2>
        </div>
        <div class="col-12 prof-part">
          <i class="bi bi-person-circle"></i>
          <p>Doivrik Shutztal</p>
        </div>
        <div class="row company">
          <div class="col-lg-3 col-sm-12 comp-logo"><img src="./images/techcrunch.png" alt=""></div>
          <div class="col-lg-3 col-sm-12 comp-logo"><img src="./images/mashable.png" alt=""></div>
          <div class="col-lg-3 col-sm-12 comp-logo"><img src="./images/bizinsider.png" alt=""></div>
          <div class="col-lg-3 col-sm-12 comp-logo"><img src="./images/tnw.png" alt=""></div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- <section class="vh-100" style="background-color: #f4f5f7;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-6 mb-4 mb-lg-0">
            <div class="card mb-3" style="border-radius: .5rem;">
            <div class="row g-0">
                <div class="col-md-4 gradient-custom text-center text-white"
                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                    alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                <h5>Marie Horwitz</h5>
                <p>Web Designer</p>
                <i class="far fa-edit mb-5"></i>
                </div>
                <div class="col-md-8">
                <div class="card-body p-4" style="background-color: black;">
                    <h6 style="color: white">Information</h6>
                    <hr class="mt-0 mb-4">
                    <div class="row pt-1">
                    <div class="col-6 mb-3">
                        <h6 style="color: white">Email</h6>
                        <p class="text" style="color: white">info@example.com</p>
                    </div>
                    <div class="col-6 mb-3">
                        <h6 style="color: white">Phone</h6>
                        <p class="text" style="color: white">123 456 789</p>
                    </div>
                    </div>
                    <h6 style="color: white">Projects</h6>
                    <hr class="mt-0 mb-4">
                    <div class="row pt-1">
                    <div class="col-6 mb-3">
                        <h6 style="color: white">Recent</h6>
                        <p class="text" style="color: white">Lorem ipsum</p>
                    </div>
                    <div class="col-6 mb-3">
                        <h6 style="color: white">Most Viewed</h6>
                        <p class="text" style="color: white">Dolor sit amet</p>
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
        </div>
        </div>
    </div>
    </section> -->
    <!-- <div class="logIn-area">
        <h2>Sign Up</h2>
        <form action="./php-scripts/process-signup.php" method="post" novalidate>
            <div>
                <label for="userName">Username</label>
                <input type="text" id="userName" name="userName">
            </div>

            <div>
                <label for="email">Email</label>
                <input type="email" name="email">
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
            </div>

            <div>
                <label for="password_confirmation">Repeat Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation">
            </div>

            <button>Sign Up</button>
        </form>
    </div> -->
    <footer>
        <hr>
        <p>©MON 2026</p>
    </footer>
</body>
</html>