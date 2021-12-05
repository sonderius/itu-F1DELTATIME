// ITU F1 Delta Time Calculator
// file for showing detail of setup
// Author: Janciar Marek - xjanci14

// Get the modal
var modal = document.getElementById("myModal");

// Get the <span> element that closes the modal
var span = document.getElementById("detailClose");

function showDetail(button, season) {
    modal.style.display = "block";
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
        var result = JSON.parse(this.responseText);
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
    xmlhttp.open("GET", "./scripts/php/setupInfo.php?setupId=" + button.parentElement.id + "&season=" + season);
    xmlhttp.send();
}

function save(button) {
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
        alert('Saved')
    }
    xmlhttp.open("GET", "./scripts/php/saveSetup.php?setupId=" + button.parentElement.id + "&season=" + getSelectedRadioButton("season"));
    xmlhttp.send();
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}