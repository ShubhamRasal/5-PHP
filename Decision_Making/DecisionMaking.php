<?php
      echo "Decision From IF...ElseIF...Else<br>";
        $d=date("D");
         
         if ($d=="Fri")
            echo "Have a nice weekend!";
         
         elseif ($d=="Sun")
            echo "Have a nice Sunday!"; 
         
         else
            echo "Have a nice day!"; 
            
            
       echo "<br>Decision From Switch statement<br>";     
       
         
         switch ($d)
         {
            case "Mon":
               echo "Today is Monday";
               break;
            
            case "Tue":
               echo "Today is Tuesday";
               break;
            
            case "Wed":
               echo "Today is Wednesday";
               break;
            
            case "Thu":
               echo "Today is Thursday";
               break;
            
            case "Fri":
               echo "Today is Friday";
               break;
            
            case "Sat":
               echo "Today is Saturday";
               break;
            
            case "Sun":
               echo "Today is Sunday";
               break;
            
            default:
               echo "sorry";
         } 
      ?>