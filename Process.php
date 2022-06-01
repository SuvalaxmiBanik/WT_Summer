<?php
$number1=$_POST["number1"];
$number2=$_POST["number2"];
$Operation=$_POST["Operation"];
$number1=(float)$number1;
$number2=(float)$number2;

if ($Operation=="add")
{
    echo "your 1st number is ".$number1." and your another number is ".$number2." and sum is ".$number1+$number2;
}
if ($Operation=="sub")
{
    echo "your 1st number is ".$number1." and your another number is ".$number2." and sub is ".$number1-$number2;
}
if ($Operation=="multiply")
{
    echo "your 1st number is ".$number1." and your another number is ".$number2." and multiply is ".$number1*$number2;
}
if ($Operation=="division")
{
    echo "your 1st number is ".$number1." and your another number is ".$number2." and division is ".$number1/$number2;
}

?>