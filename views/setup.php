<div style="width: 80%; margin: auto" id="setup">

    <div class="row">
        <div class="col-md-12 text-center">
            <h1>Season</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 text-right">
            <div class="radio-button">
                <div class="season-button">
                    <input type="radio" id="setup-2019" name="setup-season" onchange="loadSetups(this.id.substr(6))" required />
                    <label for="setup-2019">2019</label>
                </div>
            </div>
        </div>
        <div class="col-md-6 text-left">
            <div class="radio-button">
                <div class="season-button">
                    <input type="radio" id="setup-2020" name="setup-season" onchange="loadSetups(this.id.substr(6))" required />
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
    
    <div>
        <table id="saved-table">
        </table>
    </div>

</div>
