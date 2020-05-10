<?php

session_start();

$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "mahesh";

// Create connection
$conn =  mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT DISTINCT country FROM regdetails ";
$country_results = mysqli_query($conn, $sql);

?>


<!DOCTYPE html>
<html lang="en-US">

    <head>

    <title>Select your country now</title>
      <link href="" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="" crossorigin="anonymous">
        <style>
            body {
                    background-color: #cccccc;
                }
            div.solid {border-style: solid;}
        </style>
    </head>

    <body>
    <br>
    <br>
    <header><h1 align="center">selection page 1</h1></header><br>


    <div class="pageContainer">
    <h4 align="center">SELECT COUNTRY</h4>

    <form method="get" action="selectstate.php" autocomplete="on" class="formLayout">

            <div class = "container">

            <div class="form-group">
                <div class="form-group col-md-6">
                <label for="country">Country</label>
                <select class="form-control" required name="country">
                <?php 
                while($row = mysqli_fetch_assoc($country_results)){ ?>
                <option value="<?php echo $row['country'];?>"><?php echo $row['country'];?></option>
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