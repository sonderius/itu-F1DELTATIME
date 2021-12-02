<html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel= "stylesheet" href= "./css/style.css">
        <title>Calculator</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>
        <!-- The Modal -->
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <div id="setupDetail" class="grid-container">
                    <div class="grid-item"></div>
                    <div class="grid-item"><img src="../Images/Parts/car.png"></div>
                    <div class="grid-item"></div>
                    <div class="grid-item"><img src="../Images/Parts/tyres.png"></div>
                    <div class="grid-item"></div>
                    <div class="grid-item"><img src="../Images/Parts/turbo.png"></div>
                    <div class="grid-item"></div>
                    <div class="grid-item"><img src="../Images/Parts/suspension.png"></div>
                    <div class="grid-item"></div>
                    <div class="grid-item"><img src="../Images/Parts/brakes.png"></div>
                    <div class="grid-item"></div>
                    <div class="grid-item"><img src="../Images/Parts/rearWing.png"></div>
                    <div class="grid-item"></div>
                    <div class="grid-item"><img src="../Images/Parts/battery.png"></div>
                    <div class="grid-item"></div>
                    <div class="grid-item"><img src="../Images/Parts/frontWing.png"></div>
                    <div class="grid-item"></div>
                    <div class="grid-item"><img src="../Images/Parts/ice.png"></div>
                    <div class="grid-item"></div>
                    <div class="grid-item"><img src="../Images/Parts/gearbox.png"></div>
                    <div class="grid-item"></div>
                    <div class="grid-item"><img src="../Images/Parts/driver.png"></div>
                    <div class="grid-item"></div>
                    <div class="grid-item"><img src="../Images/Parts/gloves.png"></div>
                    <div class="grid-item"></div>
                    <div class="grid-item"><img src="../Images/Parts/boots.png"></div>
                    <div class="grid-item"></div>
                    <div class="grid-item"><img src="../Images/Parts/helmet.png"></div>
                    <div class="grid-item"></div>
                    <div class="grid-item"><img src="../Images/Parts/suit.png"></div>
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
                        </tr>
                        <tr id="detailRow">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="horizontal-center">
            <a href="./calculator.php" class="tab-button" id="active-tab">Calculator</a>
            <a href="./setups.php" class="tab-button">My Setups</a>
            <a href="./tracks.php" class="tab-button">Tracks</a>
            <form onsubmit="return startCalculating();">
                <h1>Season</h1>
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
                            <h2>Preferred attribute</h2>
                            <input type="radio" id="speed" name="preferred-attribute" required />
                            <label for="speed">Speed</label>
                            <input type="radio" id="acceleration" name="preferred-attribute" />
                            <label for="acceleration">Acceleration</label>
                            <input type="radio" id="grip" name="preferred-attribute" />
                            <label for="grip">Grip</label>
                            <input type="radio" id="stamina" name="preferred-attribute" />
                            <label for="stamina">Stamina</label>
                            <input type="radio" id="aggression" name="preferred-attribute" />
                            <label for="aggression">Aggression</label>
                            <input type="radio" id="concentration" name="preferred-attribute" />
                            <label for="concentration">Concentration</label>
                        </div> <!-- radio-button -->
                    </div> <!-- column -->
                    <input class="tab-button" id="submit-button" type="submit" value="Calculate" />
                </form>
                <div class="w3-light-grey">
                    <div id="myBar" class="w3-container w3-green w3-center" style="width:0%">0%</div>
                </div>
                </br>
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
                            <th></th>
                        </tr>
                    </table>
                </div>
                <div style="height:300px;overflow:auto;">
                    <table id="table">
                    </table>
                </div>
            </div> <!-- triple-column -->
        </div> <!-- horizontal-center -->
        <script src="../scripts/calculator.js"></script>
        <script src="../scripts/detail.js"></script>
    </body>
</html>