<html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel= "stylesheet" href= "css/style.css">
        <title>PHP Test</title>
    </head>

    <body>
        <?php include("../scripts/calculate.php"); ?>

        <div class="horizontal-center">
            
            <a href="/calculator.php" class="tab-button" id="active-tab">Calculator</a>
            <a href="/setups.php" class="tab-button">My Setups</a>
            <a href="/tracks.php" class="tab-button">Tracks</a>
        
            <h1>Season</h1>
            <form action="/calculator.php" method="post">
            <div class="radio-button">
                <div class="season-button">
                    <input type="radio" id="2019" name="season" required />
                    <label for="2019">2019</label>
                    <input type="radio" id="2020" name="season" />
                    <label for="2020">2020</label>
                </div> <!-- season-button -->

            </div> <!-- radio-button -->

            <div class="triple-column">
        
                <div class="column">
                    <div class="radio-button">
                        <h2>Tier</h2>
                        <input type="radio" id="a" name="tier" required />
                        <label for="a">A</label>
                        <input type="radio" id="b" name="tier" />
                        <label for="b">B</label>
                        <input type="radio" id="c" name="tier" />
                        <label for="c">C</label>
                        <input type="radio" id="d" name="tier" />
                        <label for="d">D</label>
                    </div> <!-- radio-button -->

                </div> <!-- column -->

                <div class="column">
                    <div class="radio-button">
                        <h2>Tyres</h2>
                        <input type="radio" id="soft" name="tyres" required />
                        <label for="soft">Soft</label>
                        <input type="radio" id="medium" name="tyres" />
                        <label for="medium">Medium</label>
                        <input type="radio" id="hard" name="tyres" />
                        <label for="hard">Hard</label>
                        <input type="radio" id="inter" name="tyres" />
                        <label for="inter">Inter</label>
                        <input type="radio" id="wet" name="tyres" />
                        <label for="wet">Wet</label>
                    </div> <!-- radio-button -->
                </div> <!-- column -->

                <div class="column">
                    <div class="radio-button">
                        <h2>Preffered attribute</h2>
                        <input type="radio" id="speed" name="preffered-attribute" required />
                        <label for="speed">Speed</label>
                        <input type="radio" id="acceleration" name="preffered-attribute" />
                        <label for="acceleration">Acceleration</label>
                        <input type="radio" id="grip" name="preffered-attribute" />
                        <label for="grip">Grip</label>
                        <input type="radio" id="stamina" name="preffered-attribute" />
                        <label for="stamina">Stamina</label>
                        <input type="radio" id="agression" name="preffered-attribute" />
                        <label for="agression">Agression</label>
                        <input type="radio" id="concentration" name="preffered-attribute" />
                        <label for="concentration">Concentration</label>
                    </div> <!-- radio-button -->
                </div> <!-- column -->
                <input class="tab-button" id="submit-button" type="submit" value="Calculate" />
            </form>

            <?php
                if(isset($_POST['season']))
                {
                    $configs = calculate($_POST['season'], $_POST['tier'], $_POST['tyres'], $_POST['preffered-attribute']);

                    echo "<table>";
                    
                    echo "<tr>";
                    echo "<th>Total</th>";
                    echo "<th>Car</th>";
                    echo "<th>Driver</th>";
                    echo "<th>Speed</th>";
                    echo "<th>Acceleration</th>";
                    echo "<th>Grip</th>";
                    echo "<th>Stamina</th>";
                    echo "<th>Agression</th>";
                    echo "<th>Concentration</th>";
                    echo "</tr>";


                    foreach($configs as $config)
                        {
                            echo "<tr>";
                            echo "<td>" . $config['total'] . "</td>";
                            echo "<td>" . $config['car'] . "</td>";
                            echo "<td>" . $config['driver'] . "</td>";
                            echo "<td>" . $config['speed'] . "</td>";
                            echo "<td>" . $config['acceleration'] . "</td>";
                            echo "<td>" . $config['grip'] . "</td>";
                            echo "<td>" . $config['stamina'] . "</td>";
                            echo "<td>" . $config['agression'] . "</td>";
                            echo "<td>" . $config['concentration'] . "</td>";
                            echo "</tr>";
                        }


                    echo "</table>";
                }
             ?>
            </div> <!-- triple-column -->
        </div> <!-- horizontal-center -->
    </body>
</html>