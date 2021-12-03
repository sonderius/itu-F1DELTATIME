
<div id="header">
    <div class="row">
        <div class="col-md-5 text-left">
            <div class="col-md-6 text-left">
                
                <?php
                if(isset($_SESSION['username']))
                {
                echo "<img src='";
                echo $_SESSION['path_to_pfp'];
                echo "'>";
                echo "Logged in as ";
                echo $_SESSION['username'];
                }
                else
                {
                echo "<img src='images/pfp/pfp_0.png'>";
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

            <div id="logged_out">
                <div class="col-md-6 text-right">
                <button class="tab-button" id="login_window_button">Login</button>
                </div>
            </div>

            <div id="logged_in">
                <div class="col-md-6 text-right">
                    <button onclick="logout()" class="tab-button" id="logout_button">Logout</button>
                </div>
            </div>

        </div>
    </div>
</div>
