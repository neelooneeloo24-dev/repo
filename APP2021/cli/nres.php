<?php

$fp = fopen('nee.txt','r');

//$txt=fgets($fp,1024);
$txt=fgets($fp,5);
//$txt=fgets($fp);
echo $txt;
//echo json_incode($txt);
/*
C:\laragon\www\APP2021\cli>php nres.php
This page c
C:\laragon\www\APP2021\cli>php nres.php
This page contains information about me.
C:\laragon\www\APP2021\cli>
*/


?>
