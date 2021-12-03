<?php
function logout()
{   
    if(session_status() == PHP_SESSION_ACTIVE)
    {
        session_destroy();
    }

    if(session_status() == PHP_SESSION_ACTIVE)
    {
        echo "Failed to destroy session";
    }

    echo $_SESSION['username']; // ???
}