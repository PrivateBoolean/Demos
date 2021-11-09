<?php
 include_once 'header.php';
?>
                <div class="left-col col-12 col-xs-11 col-md-11 col-lg-6 col-xl-6">
                    <h1>My #demopage</h1>
                    <p id="landing-text">This is my HTML/CSS demo with some PHP functionality.</p>
                    <div class="logged-text col-6">
                    <?php
                                    if (isset($_SESSION["username"])) {
                                        echo "<p>Welcome, " . $_SESSION["username"] . ".<br>
                                        You are now logged into this site!</p>";
                                    }
                                ?>
                    </div>
                </div>
                <!-- <div class="right-col col-12 col-xs-11 col-md-11 col-lg-6 col-xl-6">

                </div> -->

<?php

    include_once 'footer.php';

?>