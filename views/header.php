<div id="header">
    <div class="row">
        <div class="col-md-5 text-left">
            <div class="col-md-6 text-left">

                <?php
                if(isset($_SESSION['username']))
                {
                    echo "<img class='pfp-select-img' src='";
                    echo $_SESSION['path_to_pfp'];
                    echo "'>";
                    echo "<div class='white'>Logged in as <b>";
                    echo $_SESSION['username'];
                    echo "</b></div>";
                }
                else
                {
                    echo "<img class='pfp-select-img' src='images/pfp/pfp_0.png'>";
                    echo "<div class='white'>Not logged in</div>";
                }
               ?>

            </div>
            <div class="col-md-6 text-right">
                <button id="button-page-calculator" class="tab-button" onclick="changePage('calculator')"><b>Calculator</b></button>
            </div>
        </div>

        <div class="col-md-2 text-center">
            <button id="button-page-setup" class="tab-button" onclick="changePage('setup')"><b>Setups</b></button>
        </div>

        <div class="col-md-5 text-left">
            <div class="col-md-6 text-left">
                <button id="button-page-track" class="tab-button" onclick="changePage('track')"><b>Tracks</b></button>
            </div>

            <div class="col-md-6 text-right">
                <?php
                if(!isset($_SESSION['username']))
                {
                    echo '<button class="tab-button" id="login_window_button">Login</button>';
                }
                else
                {
                    echo '<form action="scripts/php/auth.php" style="height: 0;" method="post">';
                    echo '<input type="hidden" name="logout" value="true">';
                    echo '<input class="tab-button" type="submit" value="Logout">';
                    echo '<div id="login_window_button"></div>';
                    echo '</form>';
                }

                ?>

            </div>
        </div>
    </div>
</div>
