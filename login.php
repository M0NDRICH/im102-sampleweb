<?php

if ($_SERVER["REQUEST_METHOD"] === "POST")
{
    $mysqli = require __DIR__ . "/database/database.php";

    $sql = sprintf("SELECT * FROM users WHERE email = '%s'",
            $_POST["email"]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <form method="post">
        <label for="email">
        <input type="text" name="email" id="email">

        <label for="password">Password</label>
        <input type="password" name="password" id="password">

        <button>Log in</button>
    </form>
</body>
</html>