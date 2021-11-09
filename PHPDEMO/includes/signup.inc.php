<?php

    if (isset($_POST["submit"])) {
        $fullName = $_POST["fullName"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $pwd = $_POST["pwd"];
        $pwd2 = $_POST["pwd2"];

        require_once 'dbhandler.inc.php';
        require_once 'functions.inc.php';

        if (emptyInputSignup($fullName, $email, $username, $pwd, $pwd2) !== false) {
            header('location: ../signup.php?error=emptyinput');
            exit();
        }
        if (invalidUserId($username) !== false) {
            header('location: ../signup.php?error=invalidusername');
            exit();
        }
        if (invalidEmail($email) !== false) {
            header('location: ../signup.php?error=invalidemail');
            exit();
        }
        if (pwdMatch($pwd, $pwd2) !== false) {
            header('location: ../signup.php?error=passwordsdonotmatch');
            exit();
        }
        if (usernameAvailable($conn, $username, $email) !== false) {
            header('location: ../signup.php?error=usernamenotavailable');
            exit();
        }

        createUser($conn, $fullName, $email, $username, $pwd);
    }
    else {
        header('location: ../signup.php');
        exit();
    }