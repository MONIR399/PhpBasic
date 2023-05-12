<?php 
$array="Hello";
$n=count_chars($array);
for($i=0;$i<$n;$i++)
{
    if($array[$i]=='H')
    {
        $j+=$array[$i];
    }
    if($array[$i]=='e')
    {
        $k+=$array[$i];
    }
    if($array[$i]=='l')
    {
        $l+=$array[$i];
    }
    if($array[$i]=='o')
    {
        $m+=$array[$i];
    }


}

echo "H: $j<br>";
echo "e: $k<br>";
echo "l: $l<br>";
echo "o: $m<br>";



?>
