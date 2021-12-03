
<div id="header">
    <div class="row">
        <div class="col-md-5 text-left">
            <div class="col-md-6 text-left">
                <?php 
                    if(isset($_SESSION['username']))
                    {
                        echo "<img style='border-radius: 50%; width: 68px; padding: 3px;' src='" . $_SESSION['path_to_pfp'] . "'>";
                        echo "Logged in as " . $_SESSION['username'] ;
                    }else
                    {
                        echo '<img style="border-radius: 50%; width: 68px; padding: 3px;" src="images/pfp/pfp_0.png">';
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

            <?php if($_SESSION['username'])
            {
                echo '<div class="col-md-6 text-right">';
                echo '<button class="tab-button" id="login_window_button">Login</button>';
                echo "</div>";
            }else
            {
                echo '<div class="col-md-6 text-right">';
                echo '<button class="tab-button" id="logout_button">Logout</button>';
                echo "</div>";
            }
            ?>

        </div>
    </div>
</div>

