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
    <link rel="stylesheet" href="./styles/main.css" >
</head>
<body>
    <header>
        <h1>The Weavile Project</h1>
        <hr>
    </header>
    <main>
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
        
    </main>
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