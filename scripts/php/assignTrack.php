<?php
include './logic.php';

$season = $_GET['season'];
$setupId = explode(',', $_GET['setupId']);
$weather = $_GET['weather'];
$track = $_GET['track'];
$parts = loadParts('../../data/' . $_GET['season'] . '/parts.csv');

$setupTotal = setupStats($setupId, $parts)[0];
$tier = 0;
if ($setupTotal > Tier::D)
    $tier = 1;
if ($setupTotal > Tier::C)
    $tier = 2;
if ($setupTotal > Tier::B)
    $tier = 3;

assignSetup($setupId, $track, $weather, $tier, '../../data/' . $season . '/Tracks/yyy.csv');