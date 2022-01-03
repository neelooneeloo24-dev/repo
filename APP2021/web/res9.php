<?php

 $a=$_GET['num1'];
 $b=$_GET['num2'];
 $c=(float)($a/$b);
 $d=(int)$c*$b;
 $e=(int)$a-$d;
 echo "<b>Neeloo</b>"."<br/><br/>";
 echo "Remainder is:",$e;

?>