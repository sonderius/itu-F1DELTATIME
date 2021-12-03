<div id="header">
    <div class="row">
        <div class="col-md-5 text-left">
            <div class="col-md-6 text-left">
            
                <?php
                if(isset($_SESSION['username']))
                {
                    echo "<img class='pfp-select' src='";
                    echo $_SESSION['path_to_pfp'];
                    echo "'>";
                    echo "Logged in as ";
                    echo $_SESSION['username'];
                }
                else
                {
                    echo "<img class='pfp-select' src='images/pfp/pfp_0.png'>";
                    echo "Not logged in";
                }          
               ?>

            </div>
            <div class="col-md-6 text-right">
                <button class="tab-button" onclick="changePage('calculator')">Calculator</button>
            </div>
        </div>

        <div class="col-md-2 text-center">
            <button class="tab-button" onclick="changePage('setup')">My setups</button>
        </div>

        <div class="col-md-5 text-left">
            <div class="col-md-6 text-left">
                <button class="tab-button" onclick="changePage('track')">Tracks</button>
            </div>

            <div class="col-md-6 text-right">
                <?php
                if(!isset($_SESSION['username']))
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

                ?>

            </div>
        </div>
    </div>
</div>


