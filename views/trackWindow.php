<div id="trackWindow" class="modal">
    <div id="setupId" class="modal-content">
        <span id="trackClose" class="close">&times;</span>
        <div style="text-align: center;">
            <div class="radio-button">
                <div class="season-button">
                    <input type="radio" id="weather0" name="weather" checked/>
                    <label for="weather0">Dry</label>
                </div>
            </div>
            <div class="radio-button">
                <div class="season-button">
                    <input type="radio" id="weather1" name="weather"/>
                    <label for="weather1">Hot</label>
                </div>
            </div>
            <div class="radio-button">
                <div class="season-button">
                    <input type="radio" id="weather2" name="weather"/>
                    <label for="weather2">Damp</label>
                </div>
            </div>
            <div class="radio-button">
                <div class="season-button">
                    <input type="radio" id="weather3" name="weather"/>
                    <label for="weather3">Wet</label>
                </div>
            </div>
        </div>
        <div id="setupDetail" class="track-grid-container">
            <div class="grid-item"><img id="track0" height="80px" src="./images/tracks/baku.png" onclick="assign(this.parentElement.parentElement.parentElement.id, this.id.substr(5), getSelectedRadioButton('setup-season').substr(6), getSelectedRadioButton('weather').substr(7))"></div>
            <div class="grid-item"><img id="track1" height="80px" src="./images/tracks/barcelona.png" onclick="assign(this.parentElement.parentElement.parentElement.id, this.id.substr(5), getSelectedRadioButton('setup-season').substr(6), getSelectedRadioButton('weather').substr(7))"></div>
            <div class="grid-item"><img id="track2" height="80px" src="./images/tracks/france.png" onclick="assign(this.parentElement.parentElement.parentElement.id, this.id.substr(5), getSelectedRadioButton('setup-season').substr(6), getSelectedRadioButton('weather').substr(7))"></div>
            <div class="grid-item"><img id="track3" height="80px" src="./images/tracks/hungaroring.png" onclick="assign(this.parentElement.parentElement.parentElement.id, this.id.substr(5), getSelectedRadioButton('setup-season').substr(6), getSelectedRadioButton('weather').substr(7))"></div>
            <div class="grid-item"><img id="track4" height="80px" src="./images/tracks/bahrain.png" onclick="assign(this.parentElement.parentElement.parentElement.id, this.id.substr(5), getSelectedRadioButton('setup-season').substr(6), getSelectedRadioButton('weather').substr(7))"></div>
            <div class="grid-item"><img id="track5" height="80px" src="./images/tracks/imola.png" onclick="assign(this.parentElement.parentElement.parentElement.id, this.id.substr(5), getSelectedRadioButton('setup-season').substr(6), getSelectedRadioButton('weather').substr(7))"></div>
            <div class="grid-item"><img id="track6" height="80px" src="./images/tracks/mexico.png" onclick="assign(this.parentElement.parentElement.parentElement.id, this.id.substr(5), getSelectedRadioButton('setup-season').substr(6), getSelectedRadioButton('weather').substr(7))"></div>
            <div class="grid-item"><img id="track7" height="80px" src="./images/tracks/monaco.png" onclick="assign(this.parentElement.parentElement.parentElement.id, this.id.substr(5), getSelectedRadioButton('setup-season').substr(6), getSelectedRadioButton('weather').substr(7))"></div>
            <div class="grid-item"><img id="track8" height="80px" src="./images/tracks/monza.png" onclick="assign(this.parentElement.parentElement.parentElement.id, this.id.substr(5), getSelectedRadioButton('setup-season').substr(6), getSelectedRadioButton('weather').substr(7))"></div>
            <div class="grid-item"><img id="track9" height="80px" src="./images/tracks/portimao.png" onclick="assign(this.parentElement.parentElement.parentElement.id, this.id.substr(5), getSelectedRadioButton('setup-season').substr(6), getSelectedRadioButton('weather').substr(7))"></div>
            <div class="grid-item"><img id="track10" height="80px" src="./images/tracks/silverstone.png" onclick="assign(this.parentElement.parentElement.parentElement.id, this.id.substr(5), getSelectedRadioButton('setup-season').substr(6), getSelectedRadioButton('weather').substr(7))"></div>
            <div class="grid-item"><img id="track11" height="80px" src="./images/tracks/sochi.png" onclick="assign(this.parentElement.parentElement.parentElement.id, this.id.substr(5), getSelectedRadioButton('setup-season').substr(6), getSelectedRadioButton('weather').substr(7))"></div>
            <div class="grid-item"><img id="track12" height="80px" src="./images/tracks/spa.png" onclick="assign(this.parentElement.parentElement.parentElement.id, this.id.substr(5), getSelectedRadioButton('setup-season').substr(6), getSelectedRadioButton('weather').substr(7))"></div>
            <div class="grid-item"><img id="track13" height="80px" src="./images/tracks/spielberg.png" onclick="assign(this.parentElement.parentElement.parentElement.id, this.id.substr(5), getSelectedRadioButton('setup-season').substr(6), getSelectedRadioButton('weather').substr(7))"></div>
            <div class="grid-item"><img id="track14" height="80px" src="./images/tracks/zandvoort.png" onclick="assign(this.parentElement.parentElement.parentElement.id, this.id.substr(5), getSelectedRadioButton('setup-season').substr(6), getSelectedRadioButton('weather').substr(7))"></div>
        </div>
    </div>
</div>