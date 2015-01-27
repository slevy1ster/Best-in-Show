<?php
const COMMA     = ',';
const EMPTY_STR = '';

$d              =    '\n';
$data           =    "1,2,3,$d,4,5,6,$d,7,8,9$d";
$replace        =    array( COMMA, $d );
$subs           =    array( EMPTY_STR, "\x0a" );

echo  str_replace( $replace, $subs, $data );





