
<div id="header">
    <div class="row">
        <div class="col-md-5 text-left">
            <div class="col-md-6 text-left">
                <img style="border-radius: 50%; width: 68px; padding: 3px;" src="images/pfp/pfp_1.png">
                <!-- <img style="border-radius: 50%;" src=<?php $_SESSION['pfp_path']?> -->
                Logged in as: <?php //$_SESSION['username'] ?>
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
            <button class="tab-button" id="login_window_button">Login</button>
            </div>
        </div>
    </div>
</div>

