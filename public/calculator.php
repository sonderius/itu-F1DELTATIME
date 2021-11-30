<html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel= "stylesheet" href= "css/style.css">
        <title>PHP Test</title>
    </head>

    <body>
        <div class="horizontal-center">
            
            <a href="/calculator.php" class="tab-button" id="active-tab">Calculator</a>
            <a href="/setups.php" class="tab-button">My Setups</a>
            <a href="/tracks.php" class="tab-button">Tracks</a>
        
            <h1>Season</h1>

            <div class="radio-button">
                <div class="season-button">
                    <input type="radio" id="2019" name="season" />
                    <label for="2019">2019</label>
                    <input type="radio" id="2020" name="season" />
                    <label for="2020">2020</label>
                </div> <!-- season-button -->

            </div> <!-- radio-button -->

            <div class="triple-column">
        
                <div class="column">
                    <div class="radio-button">
                        <h2>Tier</h2>
                        <input type="radio" id="a" name="tier" />
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
                        <input type="radio" id="soft" name="tyres" />
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
                        <input type="radio" id="speed" name="preffered-attribute" />
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
            </div> <!-- triple-column -->
        </div> <!-- horizontal-center -->
    </body>
</html>