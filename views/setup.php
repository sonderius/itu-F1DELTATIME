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
                    <input type="radio" id="setup-2019" name="setup-season" required />
                    <label for="setup-2019">2019</label>
                </div>
            </div>
        </div>
        <div class="col-md-6 text-left">
            <div class="radio-button">
                <div class="season-button">
                    <input type="radio" id="setup-2020" name="setup-season" required />
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

    <div style="height: 300px; overflow: auto;">
        <table id="table">
        <?php



/*
            // Nemam nejmensi poneti, jak to ma fungovat, co to ma delat, jak se s tema funkcema pracuje nebo co to vubec je v tech .csv souborech

            $setups = loadSetups("data/2019/setups/xxx.csv");

            echo $setups[0][0]; // 2D pole s ID?

            $parts = loadParts("data/2019/parts.csv");

            setupStats($setupId, $parts);


            for($i = 0; isset($setups[$i][0]); $i++)
            {
                echo "<tr>";
                echo "<td>" .  . "</td>";
                echo "<td>" .  . "</td>";
                echo "<td>" .  . "</td>";
                echo "<td>" .  . "</td>";
                echo "<td>" .  . "</td>";
                echo "<td>" .  . "</td>";
                echo "<td>" .  . "</td>";
                echo "<td>" .  . "</td>";
                echo "<td>" .  . "</td>";
                echo "<td>" .  . "</td>";    
                echo "<td>" .  . "</td>";    
                echo "<td>" .  . "</td>";    
                echo "<td>" .  . "</td>";    
                echo "<td>" .  . "</td>";    
                echo "<td>" .  . "</td>";    
                echo "</tr>";

            }
*/


        ?>
        </table>
    </div>

</div>
