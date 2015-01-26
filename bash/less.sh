LINE=$'1,2,3\n4,5,6,\n7,8,9';

LINE=$( echo $LINE | tr "," "\0" );

printf '%s\n' $LINE;

