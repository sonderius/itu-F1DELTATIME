<?php
include './logic.php';

$season = $_GET['season'];
$setupId = explode(',', $_GET['setupId']);
removeSetup($setupId, '../../data/' . $season . '/Setups/xxx.csv');