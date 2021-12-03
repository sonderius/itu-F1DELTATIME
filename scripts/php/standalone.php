<?php
function logout()
{   
    // session_destroy() ani nic podobneho tu proste nejede
    $_SESSION['username'] = "LOGGED_OUT_USER";
    $_SESSION['password'] = 0;
    $_SESSION['path_to_pfp'] = 0;
}