<?<?php 
$cookie_name = "first_name";
if(isset($_POST["fname"])) 
{
  $cookie_value = $_POST["fname"];
  $cookie_expire= time()+3600*24*2;
  setcookie($cookie_name,$cookie_value,$cookie_expire);

}
 ?>
 <?php
 $cookie_name1 = 'mobile_model';
if(isset($_POST['model'])) 
{
  $cookie_value1 = $_POST['model'];
  $cookie_expire1= time()+3600*24*2;
  setcookie($cookie_name1,$cookie_value1,$cookie_expire1);
}
 ?>

<html>
   <head>
      <title>Select model</title>
      <link href="background.css" rel="stylesheet" type="text/css">
   </head>
   <body>
      <div class="pageContainer centerText">


<p></p>
         <h2 class="centerText">Select model</h2>


         <div class="pageContainer">
            <form action="Order03.php" class="formLayout" method="post">
               <div class="formGroup">
                  <label>Mobile var</label>
                  <div class="formElements">
                     <select name="color" required >
                        <option  value=""></option>
                        <option style="background-color: black; color:white;" value="4GB">4GB</option>
                        <option style="background-color: grey" value="8GB">8GB</option>
                        <option style="background-color: pink" value="16GB">16GB</option>
                     </select> 

                  </div>
               </div>
               <div class="formGroup">
                  <label>model</label>
                  <button type="submit"> >> Next >> </button>
               </div>
               <div class="centerText vertGap55">
                  <button type="submit" formnovalidate>Submit without validation</button><br><br>
                  <a href="?">Reload page</a>
               </div>
            </form>
         </div>
      </div>
   </body>
</html>