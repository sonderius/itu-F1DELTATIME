<?php

abstract class Part {
    const Car = 0;
    const Tyres = 1;
    const Turbo = 2;
    const Suspension = 3;
    const Brakes = 4;
    const RearWing = 5;
    const Battery = 6;
    const FrontWing = 7;
    const PowerUnit = 8;
    const Gearbox = 9;
    const Driver = 10;
    const Gloves = 11;
    const Boots = 12;
    const Helmet = 13;
    const Suit = 14;

    const Count = 15;
}

abstract class Stats {
    const Total = 0;
    const Car = 1;
    const Driver = 2;
    const Speed = 3;
    const Acceleration = 4;
    const Grip = 5;
    const Stamina = 6;
    const Aggression = 7;
    const Concentration = 8;
}

abstract class Tier {
    const A = INF;
    const B = 16000;
    const C = 10000;
    const D = 60000;
}

function loadParts($ethAddress) {
    $parts = array();
    for ($i = Part::Turbo; $i < Part::Driver; $i++) {
        $parts[$i][] = array(0, 0, 0);
    }
    for ($i = Part::Gloves; $i < Part::Count; $i++) {
        $parts[$i][] = array(0, 0, 0);
    }
    $file = fopen("$ethAddress.csv", 'r');
    while (($data = fgetcsv($file, 32)) !== FALSE) {
        $parts[$data[0]][] = array($data[1], $data[2], $data[3]);
    }
    fclose($file);
    return $parts;
}

function setupStats($setupId, $parts) {
    $result = array(0, 0, 0, 0, 0, 0, 0, 0, 0);
    for ($i = Part::Car; $i < Part::Driver; $i++)
    {
        $result[Stats::Speed] += $parts[$i][$setupId[$i]][0];
        $result[Stats::Acceleration] += $parts[$i][$setupId[$i]][1];
        $result[Stats::Grip] += $parts[$i][$setupId[$i]][2];
    }
    $result[Stats::Car] = $result[Stats::Speed] + $result[Stats::Acceleration] + $result[Stats::Grip];
    for ($i = Part::Driver; $i < Part::Count; $i++)
    {
        $result[Stats::Stamina] += $parts[$i][$setupId[$i]][0];
        $result[Stats::Aggression] += $parts[$i][$setupId[$i]][1];
        $result[Stats::Concentration] += $parts[$i][$setupId[$i]][2];
    }
    $result[Stats::Driver] = $result[Stats::Stamina] + $result[Stats::Aggression] + $result[Stats::Concentration];
    $result[Stats::Total] = $result[Stats::Car] + $result[Stats::Driver];
    return $result;
}