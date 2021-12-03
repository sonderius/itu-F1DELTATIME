<?php

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

function register($username, $password, $pfp)
{
    $file = new SplFileObject('../../data/user/credentials.csv', 'a');
    $file->fputcsv(array($username, $password, $pfp));
    login($username, $password);
}

function login($username, $password)
{
    $csv = array_map('str_getcsv', file("../../data/user/credentials.csv"));
    for($i = 0; isset($csv[$i][0]) ; $i++){
        if(strcmp($csv[$i][0], $username) == 0)
        {
            // Found user
            if(strcmp($csv[$i][1], $password) == 0)
            {
                // Correct password
                if(session_status() == PHP_SESSION_ACTIVE)
                {
                    session_destroy();
                }
                session_start();
                
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                $_SESSION['path_to_pfp'] = getPfpPath($username);
            }
        }
    }
}
