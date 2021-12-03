<div id="header">
    <div class="row">
        <div class="col-md-5 text-left">
            <div class="col-md-6 text-left">
            
                <?php
                if(isset($_SESSION['username']))
                {
                    // Workaround, kvuli nefungujicimu session_destroy();
                    if(strcmp($_SESSION['username'], "LOGGED_OUT_USER") == 0)
                    {
                        echo "<img class='pfp-select-img' src='images/pfp/pfp_0.png'>";
                        echo "<div class='white'>Not logged in</div>";
                    }
                    else
                    {
                    echo "<img class='pfp-select-img' src='";
                    echo $_SESSION['path_to_pfp'];
                    echo "'>";
                    echo "<div class='white'>Logged in as <b>";
                    echo $_SESSION['username'];
                    echo "</b></div>";
                    }
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
            <button id="button-page-setup" class="tab-button" onclick="changePage('setup')"><b>My Setups</b></button>
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
                    // Workaround, kvuli nefungujicimu session_destroy();
                    if(strcmp($_SESSION['username'], "LOGGED_OUT_USER") == 0)
                    {
                        echo '<button class="tab-button" id="login_window_button">Login</button>';
                    }
                    else
                    {
                        echo '<button type="button" onclick="';
                        echo 'jsLogout()';
                        echo '" class="tab-button">Logout</button>';
                        echo "<div id=login_window_button style='display:none'></div>";
                        echo "<div id='logout-placeholder'></div>";
                    }
                }     

                ?>

            </div>
        </div>
    </div>
</div>


