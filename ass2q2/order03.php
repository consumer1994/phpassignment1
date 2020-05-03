<?php
 $cookie_name2 = 'Mobile_var';
if(isset($_POST['color'])) 
{
  $cookie_value2 = $_POST['color'];
  $cookie_expire2= time()+3600*24*2;
  setcookie($cookie_name2,$cookie_value2,$cookie_expire2);

}
 ?>
<html>
   <head>
      <title>Order Confirmation </title>
      <link href="background.css" rel="stylesheet" type="text/css">
   </head>
   <body>
      <div class="pageContainer centerText">

<p></p>
         <h2>Order Confirmation</h2>
         
     <h3> <?php  echo "Congratulations" . $_COOKIE["first_name"]. "!!!!"."<br>"." You  have selected " . $_COOKIE['mobile_model'] .  $_COOKIE['Mobile_var'] ; ?> </h3>
     <br> 
            <img style='margin:30px 0;' src='/sandvig/mis314/assignments/a04/images/Mustangyellow.jpg' >
            <br>
         <a href="Order01.php">Place another order</a>

      </div>
   </body>
</html>