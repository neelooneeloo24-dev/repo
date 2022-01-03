<?php

$a=$_GET['num1'];
$b=$_GET['num2'];
$c=$_GET['num3'];
$d=$_GET['num4'];
$e=$_GET['num5'];
$res=$a+$b+$c+$d+$e;
$per=($res*100)/500;
echo "<b>Neeloo</b>"."<br/><br/>";
echo "Marks of Hindi is:",$a."<br/>";
echo "Marks of English is:",$b."<br/>";
echo "Marks of Math is:",$c."<br/>";
echo "Marks of Science is:",$d."<br/>";
echo "Marks of Social science is:",$e."<br/>";
echo "Total Obtain marks is :",$res."<br/>";
echo "Total Percentage obtain by student is: ",$per;


?>