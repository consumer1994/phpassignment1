<html>
   <head>
      <title>Login</title>
      <link href="background.css" rel="stylesheet" type="text/css">
   </head>
   <body>
      <div class="pageContainer centerText">
         <h2>Login</h2>
         <form action= "protected.php" method="post" class="formLayout">
            <div class="formGroup">
               <label>First name:</label>
               <input type="text" name="username" value="" 
                      class="formElement" 
                      placeholder="first name" 
                      title="first name" required autofocus /><br>
            </div>                     
            
            <div class="formGroup">
               <label>Password:</label>
               <input type="password" name="password" class="formElement" 
                      placeholder="password"
                      title="password" required /><br>
               <label></label>(hint: password is 'mahesh')<br>
               <label></label>
             <span class="alert">&nbsp;
                           </span>           
            </div>

            <div class="formGroup">
               <label> </label>
               <input type="hidden" name="postback" value="true">
               <button type="submit">Login</button>
            </div>
            <div class="formGroup">
               <label></label>
               <button type="submit" formnovalidate>Login without HTML5 validation</button>
            </div>

            <div class="vertGap55 centerText">
                 <a href="protected.php">Try going to protected.php without logging on.</a>
            </div>
         </form>     

      </div>
   </body>
</html>