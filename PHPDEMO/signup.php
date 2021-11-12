<?php
    include_once 'header.php';
?>

    <div class="left-col sign-div col-12 col-xs-11 col-md-11 col-lg-6 col-xl-6">
        <h2>Sign up</h2>
        <p>Please do <u>not</u> use your or anyone else's real information.</p>
        <div class="center-cont">
            <div class="form-container">
                <form action="includes/signup.inc.php" method="post">
                            <label id="fname">Full name: </label>
                    <input type="text" id="fname" name="fullName" placeholder="Full name...">
                            <label id="email">Email: </label>
                    <input type="text" id="email" name="email" placeholder="Email...">
                            <label id="username">Username: </label>
                    <input type="text" id="username" name="username" placeholder="Username...">
                            <label>Password: </label>
                    <input type="password" name="pwd" placeholder="Password...">
                            <label>Repeat password: </label>
                    <input type="password" name="pwd2" placeholder="Repeat password...">
                    <div class="button-cont">
                        <button type="submit" name="submit">Sign up!</button>
                    </div>
                </form>
            </div>
        </div>

        <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                                echo "<p>Please fill in all fields!</p>";
                }
                else if ($_GET["error"] == "invalidusername") {
                    echo "<p>Invalid username.</p>";
                }
                else if ($_GET["error"] == "invalidemail") {
                    echo "<p>Invalid email, please try again.</p>";
                }
                else if ($_GET["error"] == "passwordsdonotmatch") {
                    echo "<p>Passwords do not match, please try again.</p>";
                }
                else if ($_GET["error"] == "usernamenotavailable") {
                    echo "<p>Username not available, please try another one.</p>";
                }
                else if ($_GET["error"] == "none") {
                    echo "<p>You are now signed in. Welcome!</p>";
                }
            }
        ?>

    </div>
    <!-- <div class="right-col col-12 col-xs-11 col-md-11 col-lg-6 col-xl-6">
    </div> -->


<?php
    include_once 'footer.php';
?>