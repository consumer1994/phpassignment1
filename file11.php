<!DOCTYPE html>
<html>
<body>
<?php

echo "<table border =\"2\" style='border-collapse: collapse'>";
	for ($row=1; $row <=7; $row++) { 
		echo "<tr> \n";
		for ($col=1; $col <=7; $col++) { 
		   $x = $col * $row;
		   echo "<td>$x</td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
?>

</body>
</html>