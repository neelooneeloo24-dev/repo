<?php
//wap in php to show heredoc string as processed string
$a=100;
echo <<<"BLOCK"
this is HereDoc string, $a \n
	"This is again new line of string "$a""
'This string is inside \$a single quotes \t tabbled'=$a
BLOCK;
