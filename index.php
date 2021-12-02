<html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel= "stylesheet" href= "css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title>F1 Delta Time</title>
    </head>

    <body>  

        <div class="row">
            <div class="col-md-4 text-right">
                <button class="tab-button" onclick="changePage('calculator')">Calculator</button>
            </div>

            <div class="col-md-4 text-center">
                <button class="tab-button" onclick="changePage('setup')">My setups</button>
            </div>

            <div class="col-md-4 text-left">
                <button class="tab-button" onclick="changePage('track')">Tracks</button>
            </div>
        </div>

        <?php
            include "php/calculator.php";
            include "php/setup.php";
            include "php/track.php";
            include "php/modal.php";
        ?>

    </body>
</html>

<script src="scripts/calculator.js"></script>
<script src="scripts/detail.js"></script>

<script>

function changePage(page)
{
    switch(page)
    {
        case "calculator":
            document.getElementById("track").style.display = "none";
            document.getElementById("setup").style.display = "none";
            document.getElementById("calculator").style.display = "block";
            break;
        case "setup":
            document.getElementById("track").style.display = "none";
            document.getElementById("calculator").style.display = "none";
            document.getElementById("setup").style.display = "block";
            break;
        case "track":
            document.getElementById("calculator").style.display = "none";
            document.getElementById("setup").style.display = "none";
            document.getElementById("track").style.display = "block";
            break;
    }
}
</script>