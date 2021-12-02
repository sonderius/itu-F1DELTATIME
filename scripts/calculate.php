<?php
include './logic.php';

header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

function send_message($id, $message, $setupId, $progress) {
    $d = array('message' => $message , 'progress' => $progress, 'setupId' => $setupId);

    echo "id: $id" . PHP_EOL;
    echo "data: " . json_encode($d) . PHP_EOL;
    echo PHP_EOL;

    ob_flush();
    flush();
}

# it's a monster, but it's the most efficient way to calculate the setup
function calculateSetup($parts, $tier, $preferredStat) {
    $possibleSetupsCount = 1;
    for ($i = 0; $i < Part::Count; $i++) {
        $possibleSetupsCount *= count($parts[$i]);
    }
    $progress = 0;
    $oldProgress = 0;
    $setupId = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    $bestSetup = setupStats($setupId, $parts);
    for (; $setupId[0] < count($parts[0]); $setupId[0]++){
        for (; $setupId[1] < count($parts[1]); $setupId[1]++) {
            for (; $setupId[2] < count($parts[2]); $setupId[2]++) {
                for (; $setupId[3] < count($parts[3]); $setupId[3]++) {
                    for (; $setupId[4] < count($parts[4]); $setupId[4]++) {
                        for (; $setupId[5] < count($parts[5]); $setupId[5]++) {
                            for (; $setupId[6] < count($parts[6]); $setupId[6]++) {
                                for (; $setupId[7] < count($parts[7]); $setupId[7]++) {
                                    for (; $setupId[8] < count($parts[8]); $setupId[8]++) {
                                        for (; $setupId[9] < count($parts[9]); $setupId[9]++) {
                                            for (; $setupId[10] < count($parts[10]); $setupId[10]++) {
                                                for (; $setupId[11] < count($parts[11]); $setupId[11]++) {
                                                    for (; $setupId[12] < count($parts[12]); $setupId[12]++) {
                                                        for (; $setupId[13] < count($parts[13]); $setupId[13]++) {
                                                            for (; $setupId[14] < count($parts[14]); $setupId[14]++) {
                                                                $progress++;
                                                                if ($progress / $possibleSetupsCount > $oldProgress + 0.01) {
                                                                    $oldProgress = $progress / $possibleSetupsCount;
                                                                    send_message('PROGRESS', null, null, $oldProgress);
                                                                }
                                                                $setupStats = setupStats($setupId, $parts);
                                                                if ($setupStats[0] > $tier)
                                                                    continue;
                                                                if (($setupStats[$preferredStat] > $bestSetup[$preferredStat]) ||
                                                                    (($setupStats[$preferredStat] == $bestSetup[$preferredStat]) && ($setupStats[0] >= $bestSetup[0]))) {
                                                                    $bestSetup = $setupStats;
                                                                    send_message('SETUP', $bestSetup, $setupId, $oldProgress);
                                                                }
                                                            }
                                                            $setupId[14] = 0;
                                                        }
                                                        $setupId[13] = 0;
                                                    }
                                                    $setupId[12] = 0;
                                                }
                                                $setupId[11] = 0;
                                            }
                                            $setupId[10] = 0;
                                        }
                                        $setupId[9] = 0;
                                    }
                                    $setupId[8] = 0;
                                }
                                $setupId[7] = 0;
                            }
                            $setupId[6] = 0;
                        }
                        $setupId[5] = 0;
                    }
                    $setupId[4] = 0;
                }
                $setupId[3] = 0;
            }
            $setupId[2] = 0;
        }
        $setupId[1] = 0;
    }
}

$tier = Tier::A;

switch ($_GET['tier']) {
    case 'a':
        $tier = Tier::A;
        break;
    case 'b':
        $tier = Tier::B;
        break;
    case 'c':
        $tier = Tier::C;
        break;
    case 'd':
        $tier = Tier::D;
        break;
}

$stat = Stats::Speed;

switch ($_GET['attribute']) {
    case 'speed':
        $stat = Stats::Speed;
        break;
    case 'acceleration':
        $stat = Stats::Acceleration;
        break;
    case 'grip':
        $stat = Stats::Grip;
        break;
    case 'stamina':
        $stat = Stats::Stamina;
        break;
    case 'aggression':
        $stat = Stats::Aggression;
        break;
    case 'concentration':
        $stat = Stats::Concentration;
        break;
}

calculateSetup(loadParts('../data/' . $_GET['season'] . '/parts.csv'), $tier, $stat);

send_message('CLOSE', 'Process complete', null, 1);