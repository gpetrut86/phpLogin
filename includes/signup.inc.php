<?php

if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';


    if (emptuInputSignup($name, $email, $username, $pwd, $pwdrepeat) !== false) {
        header("Location: ../signup.php?error=emptyinput");
        exit();
    } elseif (invalidUid($username) !== false) {
        header("Location: ../signup.php?error=invalituid");
        exit();
    } elseif (invalidEmail($email) !== false) {
        header("Location: ../signup.php?error=invalidemail");
        exit();
    } elseif (pwdMatch($pwd, $pwdrepeat) !== false) {
        header("Location: ../signup.php?error=passwordsdontMantch");
        exit();
    } elseif (uidExist($conn, $username, $email) !== false) {
        header("Location: ../signup.php?error=usernametaken");
        exit();
    }


    createUser($conn, $name, $email, $username, $pwd);
} else {
    header("Location: ../signup.php");
    exit();
}
