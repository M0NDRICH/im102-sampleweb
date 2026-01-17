<?php

if (empty($_POST["lastName"])) 
{
    die("last name is required");
}

if (empty($_POST["firstName"])) 
{
    die("first name is required");
}

if (empty($_POST["middleName"])) 
{
    die("middle name is required");
}

if (empty($_POST["gender"]))
{
    die("gender is required");
}

if (empty($_POST["birthDate"])) 
{
    die("Birth date is required");
}

if (! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
{
    die("Valid email is required");
}

if (empty($_POST["cpNum"])) 
{
    die("Cellphone number is required");
}

if (strlen($_POST["cpNum"]) !== 11)
{
    die("Cellphone number length should be 11");
}

$cellphone = trim($_POST['cpNum']);

if (!preg_match('/^(09|\+639)\d{9}$/', $cellphone)) {
    die("Invalid cellphone number");
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


$birthdate = $_POST['birthDate'];

$birthDateObj = new DateTime($birthdate);
$today = new DateTime('today');

$age = $birthDateObj->diff($today)->y;


$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/../database/database.php";

$sql = "INSERT INTO user_regs (lastname, firstname, middlename, birthdate, age, gender, address, cpnum, email, password_hash)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $mysqli->stmt_init();

if (! $stmt->prepare($sql))
{
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("ssssisssss",
                $_POST["lastName"],
                $_POST["firstName"],
                $_POST["middleName"],
                $_POST["birthDate"],
                $age,
                $_POST["gender"],
                $_POST["address"],
                $_POST["cpNum"],
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