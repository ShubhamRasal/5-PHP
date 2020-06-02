<?php
         $marks = array( 
            "amit" => array
            (
               "physics" => 35,
               "maths" => 30,	
               "chemistry" => 39
            ),
            
            "sagar" => array
            (
               "physics" => 30,
               "maths" => 32,
               "chemistry" => 29
            ),
            
            "tushar" => array
            (
               1,3,4,5,6,7,8,9,10
            )
         );
         
         /* Accessing multi-dimensional array values */
         echo "Marks for amit in physics : " ;
         echo $marks['amit']['physics'] . "<br />"; 
         
         echo "Marks for sagar in maths : ";
         echo $marks['sagar']['maths'] . "<br />"; 
         
         echo "Marks for tushar in chemistry : " ;
         echo $marks['tushar'][2] . "<br />"; 
         
?>