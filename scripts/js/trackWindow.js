// Get the modal
var trackWindow = document.getElementById("trackWindow");

// Get the <span> element that closes the modal
var trackClose = document.getElementById('trackClose');

function showTracks(setupId) {
    trackWindow.style.display = "block";
    trackWindow.children[0].id = setupId;
}

function assign(setupId, trackId, season, weather) {
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
        trackWindow.style.display = "none";
    }
    xmlhttp.open("GET", "./scripts/php/assignTrack.php?setupId=" + setupId + "&season=" + season + "&track=" + trackId + "&weather=" + weather);
    xmlhttp.send();
}

// When the user clicks on <span> (x), close the modal
trackClose.onclick = function() {
    trackWindow.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == trackWindow) {
        trackWindow.style.display = "none";
    }
}