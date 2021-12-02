<?php
include './logic.php';

$setupId = explode(',', $_GET['setupId']);
$parts = loadParts('../data/' . $_GET['season'] . '/parts.csv');
$result = array();
$result['detail'] = setupDetail($setupId, $parts);
$result['summary'] = setupStats($setupId, $parts);

echo json_encode($result);