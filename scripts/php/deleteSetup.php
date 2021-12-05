<?php
# ITU F1 Delta Time Calculator
# file for deleting setup
# Author: Zavodsky Lubomir - xzavod14

include './logic.php';

$season = $_GET['season'];
$setupId = explode(',', $_GET['setupId']);
removeSetup($setupId, '../../data/' . $season . '/setups/xxx.csv');