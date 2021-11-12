<?php
    include_once 'header.php';
?>

    <div class="left-col sign-div col-12 col-xs-11 col-md-11 col-lg-6 col-xl-6">
        <h2>Log in</h2>
        <p>Use your super secret, non-personal login info to log in!</p>
        <div class="center-cont">
            <div class="form-container">
                <form action="includes/login.inc.php" method="post">
                            <label>Username or email: </label>
                    <input type="text" name="username" placeholder="Username/email...">
                            <label>Password: </label>
                    <input type="password" name="pwd" placeholder="Password...">
                    <div class="button-cont">
                        <button type="submit" name="submit">Log in!</button>
                    </div>
                </form>
            </div>
        </div>
    <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Please fill in both fields.</p>";
            }
            else if ($_GET["error"] == "invalidlogin") {
                echo "<p>Invalid login info, please try again.</p>";
            }
        }
    ?>
    </div>
    <!-- <div class="right-col col-12 col-xs-11 col-md-11 col-lg-6 col-xl-6">
    </div> -->


<?php
    include_once 'footer.php';
?>