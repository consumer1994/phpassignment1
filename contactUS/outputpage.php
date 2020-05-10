<?php

session_start();
$city = $_GET['city'];
$_SESSION["city"] = $city;
?>
<!DOCTYPE html>
<html lang="en-US">

    <head>

    <title>Your outputpage is</title>
      <link href="" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="" crossorigin="anonymous">
        <style>
            body {
                    background-color: #80d4ff;
                }
            div.solid {border-style: solid;}
        </style>
    </head>

    <body>
    <br>
    <br>
    <header><h1 align="center">Output page</h1></header><br>


    <div class="pageContainer">

    <h2 align="center"> COUNTRY: <?php echo  $_SESSION["country"];?> </h2>
    <h2 align="center"> STATE: <?php echo  $_SESSION["state"];?> </h2>
    <h2 align="center"> CITY: <?php echo  $_SESSION["city"];?> </h2>

    </div>

</body>
</html> 