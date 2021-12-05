<?php
include "standalone.php";

/*
if(session_status() == PHP_SESSION_ACTIVE)
{
    session_destroy();
}*/

if(isset($_POST['register']))
{
    if(register($_POST['username'], $_POST['password'], $_POST['pfp'])){
        // Duplicate user
        header('Location: /?duplicateUser');
        exit();
    }
}

if(isset($_POST['login']))
{
    $return_code = login($_POST['username'], $_POST['password']);
    if($return_code == 1)
    {
        header('Location: /?badPassword');
        exit();
    }
    elseif($return_code == 2)
    {
        header('Location: /?unknownUser');
        exit();
    }

}

header('Location: /');
exit();


