<?php

session_start();
$country = $_GET['country'];
$_SESSION['country'] = $country;
echo $country;


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


$sql = "SELECT DISTINCT state FROM regdetails WHERE country='$country'";
$result = mysqli_query($conn, $sql);

?>


<!DOCTYPE html>
<html lang="en-US">

    <head>

    <title>Select your state now</title>
      <link href="background.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="" crossorigin="anonymous">
        <style>
            body {
                    background-color: #ffa64d;
                }
            div.solid {border-style: solid;}
        </style>
    </head>

    <body>
    <br>
    <br>
    <header><h1 align="center">SELECTION PAGE 2</h1></header><br>


    <div class="pageContainer">
    <h4 align="center">SELECT STATE</h4>

    <form method="get" action="selectcity.php" autocomplete="on" class="formLayout">

            <div class = "container">

            <div class="form-group">
                <div class="form-group col-md-6">
                <label for="state">State</label>
                <select class="form-control" required name="state">
                <?php 
                while($row = mysqli_fetch_assoc($result)){ ?>
                <option value="<?php echo $row["state"];?>"><?php echo $row["state"];?></option>
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