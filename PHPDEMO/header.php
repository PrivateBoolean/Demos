<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/styles.css">
        <title>My demo</title>
    </head>
    <body>
        <header>
            <div class="top-container">
                <div class="logo-username">
                    <div class="logo-container">
                        Private Boolean
                    </div>
                    <div class="username-cont">
                        <?php
                            if (isset($_SESSION["username"])){
                                echo "Welcome, " . $_SESSION["username"] . "!";
                            }
                        ?>
                    </div>
                </div>
                <div class="navbar">
                    
                        <a href="index.php">Home</a>
                        <a href="about.php">About</a>

                        <?php
                            if (isset($_SESSION["username"])) {
                                echo "<a href='profile.php'>Profile</a>";
                                echo "<a href='includes/logout.inc.php'>Log out</a>";
                            }
                            else {
                                echo "<a href='signup.php'>Sign up</a>";
                                echo "<a href='login.php'>Log in</a>";
                            }
                        ?>
                </div>
            </div>
        </header>
        <main>
        <div class="container">
            <div class="main-container">