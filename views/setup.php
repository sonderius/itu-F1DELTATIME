<div id="setup">

    <div class="row">
        <div class="col-md-12 text-center">
            <h1>Season</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 text-right">
            <div class="radio-button">
                <div class="season-button">
                    <input type="radio" id="setup-2019" name="setup-season" onclick="show2019()" />
                    <label for="setup-2019">2019</label>
                </div>
            </div>
        </div>
        <div class="col-md-6 text-left">
            <div class="radio-button">
                <div class="season-button">
                    <input type="radio" id="setup-2020" name="setup-season" onclick="show2020()" />
                    <label for="setup-2020">2020</label>
                </div>
            </div>
        </div>
    </div>
    
    <div>
        <table>
            <tr>
                <th>Total</th>
                <th>Car</th>
                <th>Driver</th>
                <th>Top Speed</th>
                <th>Acceleration</th>
                <th>Grip</th>
                <th>Stamina</th>
                <th>Aggression</th>
                <th>Concentration</th>
                <th>Details</th>
            </tr>
        </table>
    </div>

    <div id="show-setup-table-2019">
        <div style="height: 300px; overflow: auto;">
            <table>
            <?php
                $setupId = loadSetups('data/2019/setups/xxx.csv');
                $parts = loadParts('data/2019/parts.csv');

                for($i = 0; isset($setupId[$i]); $i++)
                {
                    $result = setupStats($setupId[$i], $parts);
                    echo "<tr>";
                    echo "<td>" . $result[0] . "</td>";
                    echo "<td>" . $result[1] . "</td>";
                    echo "<td>" . $result[2] . "</td>";
                    echo "<td>" . $result[3] . "</td>";
                    echo "<td>" . $result[4] . "</td>";
                    echo "<td>" . $result[5] . "</td>";
                    echo "<td>" . $result[6] . "</td>";
                    echo "<td>" . $result[7] . "</td>";
                    echo "<td>" . $result[8] . "</td>"; 
                    echo "<td>" . "Detailsrow" . "</td>"; 
                    echo "</tr>";
                }
            ?>
            </table>
        </div>
    </div>

    <div id="show-setup-table-2020">
        <div style="height: 300px; overflow: auto;">
            <table>
            <?php
                $setupId = loadSetups('data/2020/setups/xxx.csv');
                $parts = loadParts('data/2020/parts.csv');
    
                for($i = 0; isset($setupId[$i]); $i++)
                {
                    $result = setupStats($setupId[$i], $parts);
                    echo "<tr>";
                    echo "<td>" . $result[0] . "</td>";
                    echo "<td>" . $result[1] . "</td>";
                    echo "<td>" . $result[2] . "</td>";
                    echo "<td>" . $result[3] . "</td>";
                    echo "<td>" . $result[4] . "</td>";
                    echo "<td>" . $result[5] . "</td>";
                    echo "<td>" . $result[6] . "</td>";
                    echo "<td>" . $result[7] . "</td>";
                    echo "<td>" . $result[8] . "</td>"; 
                    echo "<td>" . "Detailsrow" . "</td>"; 
                    echo "</tr>";
                }
            ?>
            </table>
        </div>
    </div>

</div>
