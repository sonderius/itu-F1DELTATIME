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
    es = new EventSource('../scripts/php/calculate.php?season=' + getSelectedRadioButton("season") + '&tier=' + getSelectedRadioButton("tier") + '&tyre=' + getSelectedRadioButton("tyres")
        + '&attribute=' + getSelectedRadioButton("preferred-attribute"));

    //a message is received
    es.addEventListener('message', function(e) {
        var result = JSON.parse(e.data);
        var elem = document.getElementById('myBar');

        if(e.lastEventId == 'CLOSE') {
            es.close();
            elem.style.width = 100 + '%';
            elem.innerHTML = 100  + '%';
        }
        else {
            var res = Math.round(result.progress * 100) + '%';
            elem.style.width = res;
            elem.innerHTML = res;

            if (result.message != null) {
                var table = document.getElementById('table');
                var row = table.insertRow(0);

                for (var i = 0; i < result.message.length; i++)
                {
                    var cell = row.insertCell(i);
                    cell.innerHTML = result.message[i];
                }
                var cell = row.insertCell(result.message.length);
                cell.innerHTML = '<button type="button" onclick="showDetail(this)">D</button><button type="button" onclick="save(this)">S</button>';
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