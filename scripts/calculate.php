<?php

function calculate()
{

    $config_count = rand(3, 20);

    for ($i = 0; $i < $config_count; $i++) {
        $config = array(
            "total" => rand(5, 1000),
            "car" => randomCar(),
            "driver" => randomDriver(),
            "speed" => rand(0, 500),
            "acceleration" => rand(0, 100),
            "grip" => rand(0, 100),
            "stamina" => rand(0, 100),
            "agression" => rand(0, 100),
            "concentration" => rand(0, 100),
        );
        $config_array[] = $config;
    }

    return $config_array;
}

function randomDriver()
{
    $random_driver_number = rand(0, 8);

    switch ($random_driver_number) {
        case 0:
            return "Max Verstappen";
        case 1:
            return "Lewis Hamilton";
        case 2:
            return "Valterri Bottas";
        case 3:
            return "Sergio Perez";
        case 4:
            return "Lando Norris";
        case 5:
            return "Charles Leclerc";
        case 6:
            return "Carlos Sainz";
        case 7:
            return "Daniel Ricciardo";
        case 8:
            return "Pierre Gasly";
        default:
            return "Max Verstappen";     
    }
}

function randomCar()
{
    $random_driver_number = rand(0, 3);

    switch ($random_driver_number) {
        case 0:
            return "Big car";
        case 1:
            return "Small car";
        case 2:
            return "Mediocre car";
        case 3:
            return "Trash can";
        default:
            return "IDK";     
    }
}

