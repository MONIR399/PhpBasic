
<?php 

	$a=$_POST['num1'];
	$b=$_POST['num2'];
if($a>0 && $b>0)
{

if($a>0 && $a<10 && $b>0 && $b<10)
{

   if($a>0 && $a<10) 
   {
       if($a==1)
	   {
	   		echo "One";
	   }
	   elseif($a==2)
	   {
	   		echo "Two";
	   } 
	   elseif($a==3)
	   {
	   		echo "Three";
	   }
	   elseif($a==4)
	   {
	   		echo "Four";
	   }
	   elseif($a==5)
	   {
	   		echo "Five";
	   }
	   elseif($a==6)
	   {
	   		echo "Six";
	   }
	   elseif($a==7)
	   {
	   		echo "Seven";
	   }
	   elseif($a==8)
	   {
	   		echo "Eight";
	   }
	   elseif($a==9)
	   {
	   		echo "Nine";
	   }
	   
   }
   if($b>0 && $b<10)
   {
	if($b==1)
	{
			echo "One";
	}
	elseif($b==2)
	{
			echo "Two";
	} 
	elseif($b==3)
	{
			echo "Three";
	}
	elseif($b==4)
	{
			echo "Four";
	}
	elseif($b==5)
	{
			echo "Five";
	}
	elseif($b==6)
	{
			echo "Six";
	}
	elseif($b==7)
	{
			echo "Seven";
	}
	elseif($b==8)
	{
			echo "Eight";
	}
	elseif($b==9)
	{
			echo "Nine";
	}
   }
}

   else
   {
	$sum=$a+$b;
	echo "The summmation is :$sum";
   }
   
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="" method="post">
            <input type="number" name="num1" value="<?php echo $_POST['num1'];?>"/>
            <input type="number" name="num2" value="<?php echo $_POST['num2'];?>"/>
            <input type="submit" name="submit" value="submit">
        </form>
</body>
</html>