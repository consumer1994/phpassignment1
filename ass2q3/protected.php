<?php
// Start the session
session_start();
?>
<?php
$_SESSION['username'] = $_POST["username"];
$_SESSION['password'] = $_POST["password"];
?>
<?php
if (!isset($_SESSION["username"]) && !isset($_SESSION["username"]))
{
    header("location:index.php");
}
elseif(isset($_SESSION["username"]) && isset($_SESSION["username"]) && $_POST["password"]!="mahesh")
 {
    header("location:index.php");
}   
?>

<html>
   <head>
      <title>Password Protected Page</title>
      <link href="background.css" rel="stylesheet" type="text/css">
   </head>
   <body>
      <div class="pageContainer centerText">

            <h2>Password Protected Page</h2><hr>

            <h2>Welcome <? echo $_SESSION["username"] ?></h2>
            <img src="image1.jpg" style="width:400px;height:auto;" />
            <br>
                 Your session will timeout
                 after 24 minutes of inactivity.<br><br>

         <form method="post" class="formLayout">
            <div class="formGroup">
               <input type="hidden" name="abandon" value="true">
               <label> </label>
               <button type="submit">Logout</button>
            </div>
         </form>

      </div>
   </body>
</html>