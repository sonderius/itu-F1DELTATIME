<?php
# ITU F1 Delta Time Calculator
# file for loading setups
# Author: Zavodsky Lubomir - xzavod14

include './logic.php';

$season = $_GET['season'];
$parts = loadParts('../../data/' . $season . '/parts.csv');
$setups = loadSetups('../../data/' . $season . '/setups/xxx.csv');

$result = array();

for ($i = 0; $i < count($setups); $i++)
    $result[] = array('setupId' => $setups[$i], 'stats' => setupStats($setups[$i], $parts));

echo json_encode($result);