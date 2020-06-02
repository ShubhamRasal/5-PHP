 <?php
         $array = array( 1, 2, 3, 4, 5);
         
         foreach( $array as $value )
         {
            if( $value == 3 )continue;
            echo "Value is $value <br />";
         }
?>