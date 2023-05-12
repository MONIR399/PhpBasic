<?php 
$array=array(1,2,3,4,5,6,7,8,9,10);
$sum=0;
for($i=0;$i<10;$i++)
{
    if($array[$i]%2==0)
    {
        $sum+=$array[$i];
    }
    
}

echo "The summation of 1 to 10 number is: $sum";


?>