<html>
   <head>
      <title>Select Model</title>
      <link href="background.css" rel="stylesheet" type="text/css">
   </head>
   <body>
      <div class="pageContainer">

         <h2 class="centerText">Select Model</h2>

         <form action="Order02.php" class="formLayout" method="post">
            <div class="formGroup">
               <label>First name:</label>
               <input type="text" name="fname" class="textbox" autofocus required  
                      placeholder="First name" title="first name" maxlength="20" pattern="[A-Za-z'-]{2,20}" />
            </div>
            <div class="formGroup">
               <label> mobile model:</label>
               <div class="formElements">
                  <input type="radio" name="model" id="realme" required value="realme">
                  <label for="realme">realme xt</label><br>
                  <input type="radio" name="model" id="redmi" required value="redmi">
                  <label for="redmi">redmi note 8</label><br>
                  <input type="radio" name="model" id="samsung" required value="samsung">
                  <label for="samsung">samsung s10</label><br>
                  <!-- 
                  Note: the "label for" tags bind the labels to the radio button. This allows users
                  to select a button by clicking on the label. This improves accessibility vs. using 
                  text without a label. 
                  https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/forms/Basic_form_hints
                  -->
               </div>

            </div>
            <div class="formGroup">
               <label></label>
               <button type="submit"> >> Next >> </button>

            </div>
            <div class="centerText vertGap55">
                              <button type="submit" formnovalidate>Submit without validation</button>
                              <br><br>
            <a href="?">Reload page</a>            
            </div>


      </div>

   </form>

</div>
</body>
</html>