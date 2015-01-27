<?php

$start = '1,2,3\n,4,5,6,\n,7,8,9';

$it = [['k' =>',', 'v'=>''],
       ['k'=>'\n', 'v'=>"\n"]]; // aproximating tuple seq

print array_reduce( 
    $it, 
    function( $s, $a ){
         return str_replace( $a['k'], $a['v'], $s );
             }, 
    $start );

