<?php
# ITU F1 Delta Time Calculator
# file for getting assigned setup to track
# Author: Kodousek Ondrej - xkodou00

include './logic.php';

$season = $_GET['season'];
$tier = $_GET['tier'];
$weather = $_GET['weather'];
$track = $_GET['track'];

$setupId = getAssignedSetup($track, $weather, $tier, '../../data/' . $season . '/Tracks/yyy.csv');
if (count($setupId) != 15)
    echo json_encode(null);
else {
    $parts = loadParts('../../data/' . $season . '/parts.csv');
    $result = array();
    $result['detail'] = setupDetail($setupId, $parts);
    $result['summary'] = setupStats($setupId, $parts);
    echo json_encode($result);
}
