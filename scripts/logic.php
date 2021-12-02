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
    const D = 6000;
}

# returns 3D array, 1st dimension is part type (see Part enum), 2nd dimension are parts of that type, 3rd dimension are part stats
function loadParts($fileName) {
    $parts = array();
    for ($i = Part::Turbo; $i < Part::Driver; $i++) {
        $parts[$i][] = array(0, 0, 0);
    }
    for ($i = Part::Gloves; $i < Part::Count; $i++) {
        $parts[$i][] = array(0, 0, 0);
    }
    $file = fopen($fileName, 'r');
    while (($data = fgetcsv($file, 32)) !== FALSE) {
        $parts[$data[0]][] = array($data[1], $data[2], $data[3]);
    }
    fclose($file);
    return $parts;
}

# returns array with stats of setup (see Stats enum)
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

# returns 2D array, 1st dimension are parts of each type (see Part enum), 2nd dimension are part stats
function setupDetail($setupId, $parts) {
    $result = array();
    for ($i = 0; $i < Part::Count; $i++)
        $result[] = $parts[$i][$setupId[$i]];
    return $result;
}

# returns array of saved setupIds
function loadSetups($fileName) {
    $setups = array();
    if (file_exists($fileName)) {
        $file = fopen($fileName, 'r');
        while (($data = fgetcsv($file, 32)) !== FALSE)
            $setups[] = $data;
        fclose($file);
    }
    return $setups;
}

function saveSetup($setupId, $fileName) {
    $setups = loadSetups($fileName);
    if (!in_array($setupId, $setups)) {
        $setups[] = $setupId;
        $file = fopen($fileName, 'w');
        for ($i = 0; $i < count($setups); $i++)
            fputcsv($file, $setups[$i]);
        fclose($file);
    }
}

function removeSetup($setupId, $fileName) {
    $setups = loadSetups($fileName);
    unset($setups[array_search($setupId, $setups)]);
    $file = fopen($fileName, 'w');
    for ($i = 0; $i < count($setups); $i++)
        fputcsv($file, $setups[$i]);
    fclose($file);
}

#used only by assignSetup() and getAssignedSetup
function loadTracks($fileName) {
    $tracks = array();
    if (file_exists($fileName)) {
        $file = fopen($fileName, 'r');
        while (($data = fgetcsv($file, 32)) !== FALSE)
            $tracks[] = $data;
        fclose($file);
    }
    else
        $tracks = array_fill(0, 240, array());
    return $tracks;
}

# returns setupId assigned to track (0-15), weather(0-4), tier(0-4)
function assignSetup($setupId, $track, $weather, $tier, $fileName)
{
    $tracks = loadTracks($fileName);
    $tracks[$track * 16 + $weather * 4 + $tier] = $setupId;
    $file = fopen($fileName, 'w');
    for ($i = 0; $i < count($tracks); $i++)
        fputcsv($file, $tracks[$i]);
    fclose($file);
}

# assigns setupId to track (0-15), weather(0-4), tier(0-4)
function getAssignedSetup($track, $weather, $tier, $fileName)
{
    $tracks = loadTracks($fileName);
    return $tracks[$track * 16 + $weather * 4 + $tier];
}