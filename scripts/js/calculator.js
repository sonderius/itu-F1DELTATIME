var es;

function getSelectedRadioButton(name) {
    const rbs = document.querySelectorAll('input[name="' + name + '"]');
    let selectedValue;
    for (const rb of rbs) {
        if (rb.checked)
            return rb.id;
    }
}

function startCalculating() {
    es = new EventSource('./scripts/php/calculate.php?season=' + getSelectedRadioButton("season") + '&tier=' + getSelectedRadioButton("tier") + '&tyre=' + getSelectedRadioButton("tyres")
        + '&attribute=' + getSelectedRadioButton("preferred-attribute"));
    document.getElementById('submit-button').style.display = "none";
    //a message is received
    es.addEventListener('message', function(e) {
        var result = JSON.parse(e.data);
        var elem = document.getElementById('myBar');
        var elem_value = document.getElementById('myBarValue');


        if(e.lastEventId == 'CLOSE') {
            es.close();
            elem.style.width = 100 + '%';
            elem_value.innerHTML = 100  + '%';
        }
        else {
            var res = Math.round(result.progress * 100) + '%';
            elem.style.width = res;
            elem_value.innerHTML = res;

            if (result.message != null) {
                var table = document.getElementById('table');
                var row = table.insertRow(0);

                for (var i = 0; i < result.message.length; i++)
                {
                    var cell = row.insertCell(i);
                    cell.innerHTML = result.message[i];
                }
                var cell = row.insertCell(result.message.length);
                cell.innerHTML = '<i onclick="showDetail(this, getSelectedRadioButton(\'season\'))" class="fa fa-search" style="padding-right: 20px;"></i><i onclick="save(this)" class="fa fa-save" style="padding-left: 20px;"></i>';
                cell.id = result.setupId;
            }
        }
    });

    es.addEventListener('error', function(e) {
        es.close();
    });

    return false;
}

function stopCalculating() {
    es.close();
}