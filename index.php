<html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel= "stylesheet" href= "css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title>F1 Delta Time</title>
    </head>

    <body>  

        <?php
            include "php/header.php";
            include "php/calculator.php";
            include "php/setup.php";
            include "php/track.php";
            include "php/modal.php";
            include "php/login.php";
            include "php/register.php";
        ?>

    </body>
</html>

<script src="scripts/login.js"></script>
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