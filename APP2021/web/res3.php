<?php

$a=$_GET['num1'];
$b=$_GET['num2'];
$sum=$a+$b;
$sub=$a-$b;
$mul=$a*$b;
$div=$a/$b;
echo "<b>Neeloo</b>"."<br/><br/>";
echo "Sum of two numbers is:",$sum."<br/>";
echo "Substraction of two numbers is:",$sub."<br/>";
echo "Multiplication of two numbers is:",$mul."<br/>";
//echo "Division of two numbers is:",$div."<br/>";
printf("Division of two numbers is : %.2f",$div);

?>