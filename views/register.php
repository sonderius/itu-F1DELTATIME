<!-- ITU F1 Delta Time Calculator -->
<!-- register window -->
<!-- Author: Kodousek Ondrej - xkodou00 -->

<div id="register_window" class="login_window" >
    <div class="login_window-content">
        <span class="register_window_close">&times;</span>

        <div class="row">
            <div class="col-md-12 text-center">
                <h4><b>Register new account</b></h4>
            </div>
        </div>

        <form action="scripts/php/auth.php" method="POST">

        <input type="hidden" name="register" value="1">

        <div class="row">
            <div class="col-md-6 text-right">
                <b>Username</b>
            </div>
            <div class="col-md-6 text-left">
                <input type="text" name="username" />
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 text-right">
                <b>Password</b>
            </div>
            <div class="col-md-6 text-left">
                <input type="password" name="password"/>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <b>Choose your profile picture</b>
            </div>
        </div>

        <div class="pfp-select">
            <div class="row">
                <div class="col-md-6 text-center">
                    <input type="radio" name="pfp" value="1" id="pfp_1" />
                    <label for="pfp_1"><img class='pfp-select-img' src="images/pfp/pfp_1.png"></label>
                </div>
                <div class="col-md-6 text-center">
                    <input type="radio" name="pfp" value="2" id="pfp_2" />
                    <label for="pfp_2"><img class='pfp-select-img' src="images/pfp/pfp_2.png"></label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 text-center">
                    <input type="radio" name="pfp" value="3" id="pfp_3" />
                    <label for="pfp_3"><img class='pfp-select-img' src="images/pfp/pfp_3.png"></label>
                </div>
                <div class="col-md-6 text-center">
                    <input type="radio" name="pfp" value="4" id="pfp_4" />
                    <label for="pfp_4"><img class='pfp-select-img' src="images/pfp/pfp_4.png"></label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <input class="button-to-register" type="submit" value="Register">
            </div>
        </div>

        </form>

    </div>
</div>

