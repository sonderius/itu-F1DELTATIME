<?php
include "standalone.php";

if(session_status() == PHP_SESSION_ACTIVE)
{
    session_destroy();

}

if(isset($_POST['register']))
{
    register($_POST['username'], $_POST['password'], $_POST['pfp']);
}

if(isset($_POST['login']))
{
    login($_POST['username'], $_POST['password']);
}

header('Location: /');
exit();


