<div id="calculator">
    <div id="calculator-bg">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>Season</h1>
        </div>
    </div>

    <form onsubmit="return startCalculating();">

        <div class="row">
            <div class="col-md-6 text-right">
                <div class="radio-button">
                    <div class="season-button">
                        <input type="radio" id="2019" name="season" required />
                        <label for="2019">2019</label>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-left">
                <div class="radio-button">
                    <div class="season-button">
                        <input type="radio" id="2020" name="season" required />
                        <label for="2020">2020</label>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tier Column-->
        <div class="col-md-4 text-center">
            <div class="row">
                <h2>Tier</h2>
            </div>
            <div class="row">
                <div class="radio-button">
                    <input type="radio" id="a" name="tier" required />
                    <label for="a">A</label>
                </div>
            </div>
            <div class="row">
                <div class="radio-button">
                    <input type="radio" id="b" name="tier" required />
                    <label for="b">B</label>
                </div>
            </div>
            <div class="row">
                <div class="radio-button">
                    <input type="radio" id="c" name="tier" required />
                    <label for="c">C</label>
                </div>
            </div>
            <div class="row">
                <div class="radio-button">
                    <input type="radio" id="d" name="tier" required />
                    <label for="d">D</label>
                </div>
            </div>
        </div>

        <!-- Tyres Column-->
        <div class="col-md-4 text-center">
            <div class="row">
                <h2>Tyres</h2>
            </div>
            <div class="row">
                <div class="radio-button">
                    <input type="radio" id="soft" name="tyres" required />
                    <label for="soft">Soft</label>
                </div>
            </div>
            <div class="row">
                <div class="radio-button">
                    <input type="radio" id="medium" name="tyres" />
                    <label for="medium">Medium</label>
                </div>
            </div>
            <div class="row">
                <div class="radio-button">
                    <input type="radio" id="hard" name="tyres" />
                    <label for="hard">Hard</label>
                </div>
            </div>
            <div class="row">
            <div class="radio-button">
                <input type="radio" id="intermediate" name="tyres" />
                <label for="intermediate">Intermediate</label>
                </div>
            </div>
            <div class="row">
                <div class="radio-button">
                <input type="radio" id="wet" name="tyres" />
                <label for="wet">Wet</label>
                </div>
            </div>
        </div>

        <!-- Preffered Attribute Column-->
        <div class="col-md-4 text-center">
            <div class="row">
            <h2>Preffered Attribute</h2>
            </div>
            <div class="row">
                <div class="radio-button">
                    <input type="radio" id="speed" name="preferred-attribute" required />
                    <label for="speed">Speed</label>
                </div>
            </div>
            <div class="row">
                <div class="radio-button">
                    <input type="radio" id="acceleration" name="preferred-attribute" />
                    <label for="acceleration">Acceleration</label>
                </div>
            </div>
            <div class="row">
                <div class="radio-button">
                    <input type="radio" id="grip" name="preferred-attribute" />
                    <label for="grip">Grip</label>
                </div>
            </div>
            <div class="row">
                <div class="radio-button">
                <input type="radio" id="stamina" name="preferred-attribute" />
                <label for="stamina">Stamina</label>
                </div>
            </div>
            <div class="row">
                <div class="radio-button">
                <input type="radio" id="aggression" name="preferred-attribute" />
                <label for="aggression">Aggression</label>
                </div>
            </div>
            <div class="row">
                <div class="radio-button">
                <input type="radio" id="concentration" name="preferred-attribute" />
                <label for="concentration">Concentration</label>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12 text-center">
                <input class="tab-button" id="submit-button" type="submit" value="Calculate" />
            </div>
        </div>

    </form>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-12">
                <div class="myBarGray">
                    <div id="myBar">0%</div>
                </div>
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
                <th>???</th>
            </tr>
        </table>
    </div>

    <div style="height: 300px; overflow: auto;">
        <table id="table">
        </table>
    </div>

</div>
