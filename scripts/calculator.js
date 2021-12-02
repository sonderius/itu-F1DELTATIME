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
    es = new EventSource('../scripts/calculate.php?season=' + getSelectedRadioButton("season") + '&tier=' + getSelectedRadioButton("tier") + '&tyre=' + getSelectedRadioButton("tyres")
        + '&attribute=' + getSelectedRadioButton("preffered-attribute"));

    //a message is received
    es.addEventListener('message', function(e) {
        var result = JSON.parse(e.data);

        if(e.lastEventId == 'CLOSE') {
            es.close();
            var elem = document.getElementById('myBar');
            elem.style.width = 100 + '%';
            elem.innerHTML = 100  + '%';
        }
        else {
            var elem = document.getElementById('myBar');
            elem.style.width = result.progress * 100 + '%';
            elem.innerHTML = result.progress * 100  + '%';

            if (result.message != null) {
                var table = document.getElementById('table');
                var row = table.insertRow(0);

                for (var i = 0; i < result.message.length; i++)
                {
                    var cell = row.insertCell(i);
                    cell.innerHTML = result.message[i];
                }
                var cell = row.insertCell(result.message.length);
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