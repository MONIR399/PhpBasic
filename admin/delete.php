<?php 
include "dbConnect.php";


$id=$_GET['id'];

$delete="Delete from tbl_login where id='".$id."'";

$del=$conn->query($delete);

if($del==true)
{
    $mgs="Delete Successfull.";
}
else
{
    $mgs="Delete Error.";
}

echo $mgs;
header('Location:DataView.php')
?>