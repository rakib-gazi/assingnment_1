<?php
    $num1 = 4; 
    $num2 = 5;  
    $num3 = 6;

if($num1>$num2 && $num1>$num3){
    echo "<h3>The Largest Number is {$num1}</h3>";
}elseif($num2>$num1 && $num2>$num3){
    echo "<h3>The Largest Number is {$num2}</h3>";
}else{
    echo "<h3>The Largest Number is {$num3}</h3>";
}