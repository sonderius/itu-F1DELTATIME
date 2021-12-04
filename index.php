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
    </head>

    <body>
      <?php
       ?>

        <?php
            session_start();

            include "scripts/php/standalone.php";
          //  print_r($_POST);
            include "scripts/php/logic.php";
            if (isset($_POST['logout'])){
               logout();
                  header('Location: ' ."" );
            }

            include "views/header.php";
         //   echo '<script>console.log('.'"'. var_dump($_POST).'"'.')</script>';
            include "views/calculator.php";
            include "views/setup.php";
            include "views/track.php";
            include "views/modal.php";
            include "views/login.php";
            include "views/register.php";

        ?>

    </body>
</html>

<script src="scripts/js/auth.js"></script>
<script src="scripts/js/calculator.js"></script>
<script src="scripts/js/detail.js"></script>
<script src="scripts/js/standalone.js"></script>
<script src="scripts/js/setups.js"></script>

