<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST")
{
    $mysqli = require __DIR__ . "/database/database.php";

    $sql = sprintf("SELECT * FROM users WHERE email = '%s'",
            $mysqli->real_escape_string($_POST["email"]));

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();

    if ($user)
    {
        if (password_verify($_POST["password"], $user["password_hash"]))
        {
            session_start();

            $_SESSION["user_id"] = $user["user_id"];
            

            header("Location: main.php");
            exit;
        }
    }

    $is_invalid = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./styles/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
</head>
<body>
    <h1>Login</h1>

    <?php if ($is_invalid) : ?>
        <em>Invalid Login</em>
    <?php endif; ?>

    <form method="post">
        <label for="email">Email</label>
        <input type="text" name="email" id="email"
                value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">

        <label for="password">Password</label>
        <input type="password" name="password" id="password">

        <button>Log in</button>
    </form>
</body>
</html>