<?php 
$array=array(12, 35, 1, 10, 34, 1,100);
$max=12;
for($i=0;$i<10;$i++)
{
    if($array[$i]>$max)
    {
        $max=$array[$i];
    }
}

echo "The largest number is: $max";


?>
