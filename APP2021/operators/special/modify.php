<?php
//wap in php to show modify operators
$x=10;
$x+=1;
echo "The value of x without assignment operator: $x \n";

$x=10;
$z=$x++;
echo "The value of x using post increment operator: $x and $z \n";

$x=10;
$z=++$x;
echo "The value of x using pre increment operator: $x and $z \n";


