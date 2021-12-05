<?php
# ITU F1 Delta Time Calculator
# functions for login/registration
# Author: Kodousek Ondrej - xkodou00
# Author: Zavodsky Lubomir - xzavod14

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
    $csv = array_map('str_getcsv', file("../../data/user/credentials.csv"));
    for($i = 0; isset($csv[$i][0]) ; $i++){
        if(strcmp($csv[$i][0], $username) == 0)
        {
            // Duplicate user

            return 1;
        }
    }

    $file = new SplFileObject('../../data/user/credentials.csv', 'a');
    $file->fputcsv(array($username, $password, $pfp));
    login($username, $password);
    return 0;
}
function logout()
{
    session_destroy();// ani nic podobneho tu proste nejede
   //unset($_SESSION[$login]);
    $_SESSION['username'] = null ;
    $_SESSION['password'] = 0;
   $_SESSION['path_to_pfp'] = 0;

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
                return 0;
            }else
            {
                return 1;
            }
        }
    }
    return 2;
}
