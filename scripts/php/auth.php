<?php

if(session_status() == PHP_SESSION_ACTIVE)
{
    session_destroy();
}


$csv = array_map('str_getcsv', file("../../data/user/credentials.csv"));

for($i = 0; isset($csv[$i][0]) ; $i++){
    if(strcmp($csv[$i][0], $_POST['username']) == 0)
    {
        // Found user
        if(strcmp($csv[$i][1], $_POST['password']) == 0)
        {
            // Correct password
            if(session_status() == PHP_SESSION_ACTIVE)
            {
                session_destroy();
            }
            session_start();
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];
            $_SESSION['path_to_pfp'] = getPfpPath($_POST['username']);
        }
    }
}

header('Location: /');
exit();

function getPfpPath($username)
{
    $csv = array_map('str_getcsv', file("../../data/user/credentials.csv"));

    for($i = 0; isset($csv[$i][0]) ; $i++){
        if(strcmp($csv[$i][0], $username) == 0)
        {
            switch($csv[$i][2])
            {
                case 1:
                    return "images/pfp/pfp_1.png";
                case 2:
                    return "images/pfp/pfp_2.png";
                case 3:
                    return "images/pfp/pfp_3.png";
                case 4:
                    return "images/pfp/pfp_4.png";
            }
        }
    }
}
