<?php

session_start();
$state = $_GET['state'];
$_SESSION["state"] = $state;
echo $state;


$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "mahesh";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT DISTINCT city FROM regdetails WHERE state ='$state'";
$result = mysqli_query($conn, $sql);

?>


<!DOCTYPE html>
<html lang="en-US">

    <head>

    <title>slect city now</title>
      <link href="background.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="" crossorigin="anonymous">
        <style>
            body {
                    background-color: #99e6ff;
                }
            div.solid {border-style: solid;}
        </style>
    </head>

    <body>
    <br>
    <br>
    <header><h1 align="center">SELECTION PAGE 3</h1></header><br>


    <div class="pageContainer">
    <h4 align="center">SELECT CITY</h4>

    <form method="get" action="outputpage.php" autocomplete="on" class="formLayout">

            <div class = "container">

            <div class="form-group">
                <div class="form-group col-md-6">
                <label for="city">city</label>
                <select class="form-control" required name="city">
                <?php 
                while($row = mysqli_fetch_assoc($result)){ ?>
                <option value="<?php echo $row["city"];?>"><?php echo $row["city"];?></option>
                <?php } ?>
                </select>
                </div>
            </div>


            <br> 
            </div>
             <button type="submit" class="btn btn-primary" style="margin-left:50px" >NEXT</button>
            </div>

            </div>

        </form>
    </div>
    <?php
    mysqli_close($conn);
    ?>
</body>
</html>