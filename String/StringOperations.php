<?php
   $string1="Hello World";
   $string2="1234";
   
   //String Concatenation Operator
   echo $string1 . " " . $string2;//Hello World 1234
   echo("<br>");
   
   //Using the strlen() function
   echo strlen("Hello world!");//12
   echo("<br>");
   
   //Using the strpos() function
   echo strpos("Hello world!","world");//6
   
   // count no of words in string
   echo str_word_count("Hello world!"); // 2
   
   // reverse the string
   echo strrev("Hello world!"); //!dlrow olleH
  

  // replace word with other word
  echo str_replace("world", "India", "Hello world!"); // Hello India!
  
  
  echo("<br>");
?>