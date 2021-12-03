<?php
include './logic.php';

$setupId = explode(',', $_GET['setupId']);
saveSetup($setupId, '../../data/' . $_GET['season'] . '/setups/xxx.csv');