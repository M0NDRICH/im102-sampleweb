<?php

if (empty($_POST["userName"])) 
{
    die("Name is required");
}

if (! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
{
    die("Valid email is required");
}

if (strlen($_POST["password"]) < 8)
{
    die("Password must be at least 8 characters");
}

if (! preg_match("/[a-z]/i", $_POST["password"]))
{
    die("Password must contain at least one letter");
}

if (! preg_match("/[0-9]/i", $_POST["password"]))
{
    die("Password must contain at least one number");
}

if ($_POST["password"] !== $_POST["password_confirmation"])
{
    die("Passwords must match");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/../database/database.php";

$sql = "INSERT INTO users (user_name, email, password_hash)
        VALUES (?, ?, ?)";

$stmt = $mysqli->stmt_init();

if (! $stmt->prepare($sql))
{
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("sss",
                $_POST["userName"],
                $_POST["email"],
                $password_hash);

// if ($stmt->execute())
// {
//     echo "Signup successful";
// }
// else
// {
//     echo "Error choy";
//     die($mysqli->error . " " . $mysqli->errno);
// }

try {
    $stmt->execute();
    // echo "Signup successful";
    header("Location: ../signupsuccess.php");
} catch (mysqli_sql_exception $e) {

    if ($e->getCode() == 1062) {
        echo "Email already exists. Please use another email.";
    } else {
        echo "Database error: " . $e->getMessage();
    }
}


// print_r($_POST);
// var_dump($password_hash);
// echo "Signup successful";