<?php

$d          =  '\n';
$str	    =  "1,2,3,$d,4,5,6,$d,7,8,9";

echo "\$str is $str\n\n";

$replace    = array( "/[\\\\n]+/", '/,/' );   // 4 \ "" or 3 \ ''
$substitute = array( "\n", "" );
$str        = preg_replace( $replace, $substitute, $str ); 

print $str;





