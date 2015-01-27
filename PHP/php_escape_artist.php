<?php

const COMMA     = ',';
const EMPTY_STR = '';

$d              = '\n';
$data           = "1,2,3,$d,4,5,6,$d,7,8,9";

$split		 = explode( "\\n", $data );

// $split = preg_split( '/[\\\n]+/', $data );

$imploded	 = implode( PHP_EOL, $split );
echo str_replace( COMMA, '', $imploded ), PHP_EOL;
