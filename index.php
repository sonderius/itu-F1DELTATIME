<html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href= "css/style.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title>F1 Delta Time</title>

        <script src="scripts/js/calculator.js"></script>
        <script src="scripts/js/authPre.js"></script>

    </head>

    <body>
      <?php
       ?>

        <?php
            session_start();

            include "scripts/php/standalone.php";

            include "scripts/php/logic.php";
            
            if (isset($_GET['logout'])){
                $_SESSION['username'] = NULL;
            }

            include "views/header.php";

            include "views/calculator.php";
            include "views/setup.php";
            include "views/track.php";
            include "views/modal.php";
            include "views/trackWindow.php";
            include "views/authIncorrect.php";
            include "views/login.php";
            include "views/register.php";

            if(isset($_GET['duplicateUser']))
            {
                echo "<script>";
                echo "duplicateUser();";
                echo "</script>";
            }

            if(isset($_GET['unknownUser']))
            {
                echo "<script>";
                echo "unknownUser();";
                echo "</script>";
            }

            if(isset($_GET['badPassword']))
            {
                echo "<script>";
                echo "badPassword();";
                echo "</script>";
            }
        ?>

    </body>
</html>

<script src="scripts/js/auth.js"></script>
<script src="scripts/js/calculator.js"></script>
<script src="scripts/js/detail.js"></script>
<script src="scripts/js/standalone.js"></script>
<script src="scripts/js/setups.js"></script>
<script src="scripts/js/trackWindow.js"></script>
<script src="scripts/js/track.js"></script>

