// Get the modal
var modal = document.getElementById("myModal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

function showDetail(button) {
    modal.style.display = "block";
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
        var result = JSON.parse(this.responseText);
        var detail = result.detail;
        var summary = result.summary;
        var stats = document.getElementById("setupDetail").children;
        for (var i = 0; i < 20; i += 2)
            stats[i].innerHTML = '<p><img class="invert" src="../Images/Stats/speed.svg"> ' + detail[i/2][0] + '</br><img class="invert" src="../Images/Stats/acceleration.svg"> ' + detail[i/2][1] + '</br><img class="invert" src="../Images/Stats/grip.svg"> ' + detail[i/2][2] + '</p>';
        for (var i = 20; i < stats.length; i += 2)
            stats[i].innerHTML = '<p><img class="invert" src="../Images/Stats/stamina.svg"> ' + detail[i/2][0] + '</br><img class="invert" src="../Images/Stats/aggression.svg"> ' + detail[i/2][1] + '</br><img class="invert" src="../Images/Stats/concentration.svg"> ' + detail[i/2][2] + '</p>';
        var summaryCells = document.getElementById("detailRow").children;
        for (var i = 0; i < summaryCells.length; i++)
            summaryCells[i].innerHTML = summary[i];
    }
    xmlhttp.open("GET", "../scripts/setupInfo.php?setupId=" + button.parentElement.id + "&season=" + getSelectedRadioButton("season"));
    xmlhttp.send();
}

function save(button) {
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
        alert('Saved')
    }
    xmlhttp.open("GET", "../scripts/saveSetup.php?setupId=" + button.parentElement.id + "&season=" + getSelectedRadioButton("season"));
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