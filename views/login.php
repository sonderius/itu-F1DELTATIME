<div id="login_window" class="login_window" >
    <div class="login_window-content">

        <div class="row">
            <span class="login_window_close">&times;</span>
        </div>

        <form action="scripts/php/auth.php" method="POST">

        <div class="row">
            <div class="col-md-6 text-right">
                <b>Username</b>
            </div>
            <div class="col-md-6 text-left">
                <input type="text" name="username" required />
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 text-right">
                <b>Password</b>
            </div>
            <div class="col-md-6 text-left">
                <input type="password" name="password" required />
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <a id="register_window_button" >Not a member? Register here</a>
            </div>
            <div class="col-md-6 text-left">
                <input type="submit" id="login_submit" value="Login">
            </div>
        </div>

        </form>

    </div>
</div>

