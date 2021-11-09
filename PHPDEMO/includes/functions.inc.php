<?php

/* ------ Sign up functions ------ */

    function emptyInputSignup($fullName, $email, $username, $pwd, $pwd2) {
        $result;
        if (empty($fullName) || empty($email) || empty($username) || empty($pwd) || empty($pwd2)) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }

    function invalidUserId($username) {
        $result;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }

    function invalidEmail($email) {
        $result;
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $result = true;
        }
        else {
                $result = false;
        }
        return $result;
    }
    
    function pwdMatch($pwd, $pwd2) {
        $result;
        if ($pwd !== $pwd2) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }

    function usernameAvailable($conn, $username, $email) {
        $sql = "SELECT * FROM users WHERE usersUsername = ? OR usersEmail = ?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header('location: ../signup.php?error=stmtfailed');
            exit();
        }

        mysqli_stmt_bind_param($stmt, "ss", $username, $email);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        }
        else {
            $result = false;
        }
        return $result;

        mysqli_stmt_close($stmt);
    }

    function createUser($conn, $fullName, $email, $username, $pwd) {
        $sql = "INSERT INTO users (usersFullName, usersEmail, usersUsername, usersPwd) VALUES (?, ?, ? ,?);";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "ssss", $fullName, $email, $username, $hashedPwd);
        mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);
        header("location: ../signup.php?error=none");
        exit();
    }


/* ------ Log in functions ------ */

function emptyInputLogin($username, $pwd) {
    $result;
    if (empty($username) || empty($pwd)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginUser ($conn, $username, $pwd) {
     $usernameAvailable = usernameAvailable($conn, $username, $username);

     if ($usernameAvailable === false) {
         header('location: ../login.php?error=invalidlogin');
         exit();
    }

     $pwdHashed = $usernameAvailable["usersPwd"];
     $checkPwd = password_verify($pwd, $pwdHashed);

     if ($checkPwd === false) {
         header('location: ../login.php?error=invalidlogin');
         exit();
     }
     else if ($checkPwd === true) {
         session_start();
         $_SESSION["uId"] = $usernameAvailable["usersId"];
         $_SESSION["username"] = $usernameAvailable["usersUsername"];
         header('location: ../index.php');
         exit();
     }
 }