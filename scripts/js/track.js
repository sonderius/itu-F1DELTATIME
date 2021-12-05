// ITU F1 Delta Time Calculator
// functions for changing tabs
// Author: Kodousek Ondrej - xkodou00

function showAssignedTrack(season, tier, weather, track) {
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
        var result = JSON.parse(this.responseText);
        if (result == null) {
            alert('No setup assigned');
        } else {
            modal.style.display = "block";
            var detail = result.detail;
            var summary = result.summary;
            var stats = document.getElementById("setupDetail").children;
            for (var i = 0; i < 20; i += 2)
                stats[i].innerHTML = '<p><img class="invert" src="./images/stats/speed.svg"> ' + detail[i/2][0] + '</br><img class="invert" src="./images/stats/acceleration.svg"> ' + detail[i/2][1] + '</br><img class="invert" src="./images/stats/grip.svg"> ' + detail[i/2][2] + '</p>';
            for (var i = 20; i < stats.length; i += 2)
                stats[i].innerHTML = '<p><img class="invert" src="./images/stats/stamina.svg"> ' + detail[i/2][0] + '</br><img class="invert" src="./images/stats/aggression.svg"> ' + detail[i/2][1] + '</br><img class="invert" src="./images/stats/concentration.svg"> ' + detail[i/2][2] + '</p>';
            var summaryCells = document.getElementById("detailRow").children;
            for (var i = 0; i < summaryCells.length; i++)
                summaryCells[i].innerHTML = summary[i];
        }
    }
    xmlhttp.open("GET", "./scripts/php/showAssignedTrack.php?season=" + season + "&tier=" + tier + "&weather=" + weather + "&track=" + track);
    xmlhttp.send();
}