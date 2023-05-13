<?php
session_start();
if(empty($_SESSION['count']{
$_SESSION['count']=1;
}
      else{
      $_SESSION['count']++;   
         }
echo "Hello, visitor you have viewed our site ".$_SESSION['count'] ."times<br>";
         ?>
<p>
To continue, <a href="nextpage.php?<?php echo htmlspecialchars(SID); ?>">click
here</a>.
</p>
