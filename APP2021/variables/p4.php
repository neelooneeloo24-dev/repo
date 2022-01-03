<?php
//wap in php to show boolean false stored in variable

$x=false;
echo $x;//nothing
echo PHP_EOL;
echo getType($x);//boolean
echo PHP_EOL;
var_dump($x);//bool(false)
echo PHP_EOL;
echo json_encode($x);//raw format
echo PHP_EOL;

echo 'On comparing the values:';
echo PHP_EOL;
echo (false==False);
echo PHP_EOL;
var_dump(false==FALSE);
echo PHP_EOL;
var_dump(0==FALSE);//type is optional match
echo PHP_EOL;
var_dump(0==(int)FALSE);//Implicit type conversion//php dynamic
echo PHP_EOL;
var_dump(0===false);//content match and type match=false
echo PHP_EOL;

echo 'working with printf and boolean value';
printf("%s","Neeloo");
echo PHP_EOL;
printf("%d",10);
echo PHP_EOL;
printf("%b",true);
echo PHP_EOL;
printf("%d",1);
echo PHP_EOL;
printf("The value of true in int: %d",true);
echo PHP_EOL;
printf("The value of true as a string: %s",true);
echo PHP_EOL;
printf("The value of 1 as a string: %s",1);
echo PHP_EOL;
printf("The value of 0 as a string: %s",0);
echo PHP_EOL;
printf("the value of bool false as string: %s",json_encode(false));
echo PHP_EOL;
printf("the value of string as empty as string: %s",'');
echo PHP_EOL;
printf("the value of bool false as string: %s",false);
echo PHP_EOL;
printf("the value of bool false as bool: %b",false);
echo PHP_EOL;
printf("The value of bool as integer: %d",false);
echo PHP_EOL;

?>


