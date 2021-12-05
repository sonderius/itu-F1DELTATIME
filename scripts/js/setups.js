function loadSetups(selectedSeason) {
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
        var result = JSON.parse(this.responseText);
        var table = document.getElementById('saved-table');
        table.innerHTML = '';

        for (var x = 0; x < result.length; x++)
        {
            var row = table.insertRow(0);

            for (var i = 0; i < result[x].stats.length; i++)
            {
                var cell = row.insertCell(i);
                cell.innerHTML = result[x].stats[i];
            }
            var cell = row.insertCell(result[x].stats.length);
            cell.innerHTML = '<i onclick="showDetail(this, getSelectedRadioButton(\'setup-season\').substr(6))" class="fa fa-info" style="padding-right: 20px;"></i><i onclick="showTracks(this.parentElement.id)" class="fa fa-compass" style="padding-right: 20px;"></i><i onclick="deleteSetup(this.parentElement.id)" class="fa fa-trash-o" style="padding-right: 20px;"></i>';
            cell.id = result[x].setupId;
        }
    }
    xmlhttp.open("GET", "./scripts/php/loadSetups.php?season=" + selectedSeason);
    xmlhttp.send();
}

function deleteSetup(setupId) {
    var selectedSeason = getSelectedRadioButton('setup-season').substr(6);
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
        loadSetups(selectedSeason);
    }
    xmlhttp.open("GET", "./scripts/php/deleteSetup.php?season=" + selectedSeason + "&setupId=" + setupId);
    xmlhttp.send();
}