<?php
   session_start();
   
   if (isset($_SESSION['counter'])) {
      $_SESSION['counter'] += 1;
   }
   else {
      $_SESSION['counter']=1;
   }
   
   $msg = "You have visited this page ".  $_SESSION['counter'];
   $msg .= "in this session.";
   
   echo ( $msg );
?>
<p>
   To continue  click following link <br />
   
   <a  href="nextpage.php?<?php echo htmlspecialchars(session_id()); ?>">Link</a>
</p>