LINE=$'1,2,3,\n4,5,6,\n7,8,9\n'
IFS=','
for ch in $LINE
do
   echo -n $ch
done
