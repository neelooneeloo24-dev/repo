<?php

#echo getType($_REQUEST);
#print_r($_REQUEST); //superGlobal variable(predefined in php)

$name=$_REQUEST['name'];
//echo $name;
printf("Hii! Welcome %s",$name);

?>