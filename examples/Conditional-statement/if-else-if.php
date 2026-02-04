<?php
$n1=67;
$n2=96;
if($n1>$n2){
    echo "n2 is largest";
}
else if($n2>$n1){
    echo "n2 is largest";
}
else{
    echo "both are equal";
}

$num = 5678;
if($num>10000){
    echo "num is larger 10000";
}
else if($num>=0 && $num<=10000){
    echo "num is between 0 and 10000";
}
else{
    echo "number less than 0";
}

// terinary operator
$num1 = 5648;
echo $num1>5000 /*&& num1<6000*/ ? "number is between 5000 and 6000" : "number is not in between 5000 and 6000";
