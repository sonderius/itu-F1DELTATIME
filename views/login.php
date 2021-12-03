<div id="login_window" class="login_window" >
    <div class="login_window-content">

        <div class="row">
            <div class="col-md-2 text-center">
 
            </div>
            <div class="col-md-8 text-center">
                <h4><b>Login into your account</b></h4>
            </div>
            <div class="col-md-2 text-right">
                <span class="login_window_close">X</span>
            </div>
        </div>

        <form action="scripts/php/auth.php" method="POST">

        <input type="hidden" name="login" value="1">

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
                <input type="submit" value="Login">
            </div>
        </div>

        </form>

    </div>
</div>

