<div style="width: 50%; margin: auto" id="track">
    <div style="text-align: center;">
        <div class="radio-button">
            <div class="season-button">
                <input type="radio" id="track2019" name="trackSeason" checked/>
                <label for="track2019">2019</label>
            </div>
        </div>
        <div class="radio-button">
            <div class="season-button">
                <input type="radio" id="track2020" name="trackSeason"/>
                <label for="track2020">2020</label>
            </div>
        </div>
    </div>
    <div style="text-align: center;">
        <div class="radio-button">
            <div class="season-button">
                <input type="radio" id="trackTier3" name="trackTier" checked/>
                <label for="trackTier3">A</label>
            </div>
        </div>
        <div class="radio-button">
            <div class="season-button">
                <input type="radio" id="trackTier2" name="trackTier"/>
                <label for="trackTier2">B</label>
            </div>
        </div>
        <div class="radio-button">
            <div class="season-button">
                <input type="radio" id="trackTier1" name="trackTier"/>
                <label for="trackTier1">C</label>
            </div>
        </div>
        <div class="radio-button">
            <div class="season-button">
                <input type="radio" id="trackTier0" name="trackTier"/>
                <label for="trackTier0">D</label>
            </div>
        </div>
    </div>
    <div style="text-align: center;">
        <div class="radio-button">
            <div class="season-button">
                <input type="radio" id="trackWeather0" name="trackWeather" checked/>
                <label for="trackWeather0">Dry</label>
            </div>
        </div>
        <div class="radio-button">
            <div class="season-button">
                <input type="radio" id="trackWeather1" name="trackWeather"/>
                <label for="trackWeather1">Hot</label>
            </div>
        </div>
        <div class="radio-button">
            <div class="season-button">
                <input type="radio" id="trackWeather2" name="trackWeather"/>
                <label for="trackWeather2">Damp</label>
            </div>
        </div>
        <div class="radio-button">
            <div class="season-button">
                <input type="radio" id="trackWeather3" name="trackWeather"/>
                <label for="trackWeather3">Wet</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 text-center">
            <img width="auto" height="150" id="track00" src="./images/tracks/baku.png" onclick="showAssignedTrack(getSelectedRadioButton('trackSeason').substr(5), getSelectedRadioButton('trackTier').substr(9), getSelectedRadioButton('trackWeather').substr(12), this.id.substr(6))">
        </div>
        <div class="col-md-4 text-center">
            <img width="auto" height="150" id="track01" src="./images/tracks/barcelona.png" onclick="showAssignedTrack(getSelectedRadioButton('trackSeason').substr(5), getSelectedRadioButton('trackTier').substr(9), getSelectedRadioButton('trackWeather').substr(12), this.id.substr(6))">
        </div>
        <div class="col-md-4 text-center">
            <img width="auto" height="150" id="track02" src="./images/tracks/france.png" onclick="showAssignedTrack(getSelectedRadioButton('trackSeason').substr(5), getSelectedRadioButton('trackTier').substr(9), getSelectedRadioButton('trackWeather').substr(12), this.id.substr(6))">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 text-center">
            <img width="auto" height="150" id="track03" src="./images/tracks/hungaroring.png" onclick="showAssignedTrack(getSelectedRadioButton('trackSeason').substr(5), getSelectedRadioButton('trackTier').substr(9), getSelectedRadioButton('trackWeather').substr(12), this.id.substr(6))">
        </div>
        <div class="col-md-4 text-center">
            <img width="auto" height="150" id="track04" src="./images/tracks/bahrain.png" onclick="showAssignedTrack(getSelectedRadioButton('trackSeason').substr(5), getSelectedRadioButton('trackTier').substr(9), getSelectedRadioButton('trackWeather').substr(12), this.id.substr(6))">
        </div>
        <div class="col-md-4 text-center">
            <img width="auto" height="150" id="track05" src="./images/tracks/imola.png" onclick="showAssignedTrack(getSelectedRadioButton('trackSeason').substr(5), getSelectedRadioButton('trackTier').substr(9), getSelectedRadioButton('trackWeather').substr(12), this.id.substr(6))">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 text-center">
            <img width="auto" height="150" id="track06" src="./images/tracks/mexico.png" onclick="showAssignedTrack(getSelectedRadioButton('trackSeason').substr(5), getSelectedRadioButton('trackTier').substr(9), getSelectedRadioButton('trackWeather').substr(12), this.id.substr(6))">
        </div>
        <div class="col-md-4 text-center">
            <img width="auto" height="150" id="track07" src="./images/tracks/monaco.png" onclick="showAssignedTrack(getSelectedRadioButton('trackSeason').substr(5), getSelectedRadioButton('trackTier').substr(9), getSelectedRadioButton('trackWeather').substr(12), this.id.substr(6))">
        </div>
        <div class="col-md-4 text-center">
            <img width="auto" height="150" id="track08" src="./images/tracks/monza.png" onclick="showAssignedTrack(getSelectedRadioButton('trackSeason').substr(5), getSelectedRadioButton('trackTier').substr(9), getSelectedRadioButton('trackWeather').substr(12), this.id.substr(6))">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 text-center">
            <img width="auto" height="150" id="track009" src="./images/tracks/portimao.png" onclick="showAssignedTrack(getSelectedRadioButton('trackSeason').substr(5), getSelectedRadioButton('trackTier').substr(9), getSelectedRadioButton('trackWeather').substr(12), this.id.substr(6))">
        </div>
        <div class="col-md-4 text-center">
            <img width="auto" height="150" id="track010" src="./images/tracks/silverstone.png" onclick="showAssignedTrack(getSelectedRadioButton('trackSeason').substr(5), getSelectedRadioButton('trackTier').substr(9), getSelectedRadioButton('trackWeather').substr(12), this.id.substr(6))">
        </div>
        <div class="col-md-4 text-center">
            <img width="auto" height="150" id="track011" src="./images/tracks/sochi.png" onclick="showAssignedTrack(getSelectedRadioButton('trackSeason').substr(5), getSelectedRadioButton('trackTier').substr(9), getSelectedRadioButton('trackWeather').substr(12), this.id.substr(6))">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 text-center">
            <img width="auto" height="150" id="track012" src="./images/tracks/spa.png" onclick="showAssignedTrack(getSelectedRadioButton('trackSeason').substr(5), getSelectedRadioButton('trackTier').substr(9), getSelectedRadioButton('trackWeather').substr(12), this.id.substr(6))">
        </div>
        <div class="col-md-4 text-center">
            <img width="auto" height="150" id="track013" src="./images/tracks/spielberg.png" onclick="showAssignedTrack(getSelectedRadioButton('trackSeason').substr(5), getSelectedRadioButton('trackTier').substr(9), getSelectedRadioButton('trackWeather').substr(12), this.id.substr(6))">
        </div>
        <div class="col-md-4 text-center">
            <img width="auto" height="150" id="track014" src="./images/tracks/zandvoort.png" onclick="showAssignedTrack(getSelectedRadioButton('trackSeason').substr(5), getSelectedRadioButton('trackTier').substr(9), getSelectedRadioButton('trackWeather').substr(12), this.id.substr(6))">
        </div>
    </div>
</div>