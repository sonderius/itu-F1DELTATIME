<?php
# ITU F1 Delta Time Calculator
# file for saving setup
# Author: Janciar Marek - xjanci14

include './logic.php';

$setupId = explode(',', $_GET['setupId']);
saveSetup($setupId, '../../data/' . $_GET['season'] . '/setups/xxx.csv');