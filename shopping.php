
<?php 
    $temp=$_POST['num'];

       if($temp>1000 && $temp<=1500 && $temp>1500)
       {
            echo "I will buy Punjabi.<br>I will buy new shoes.";
       }
       else
       {
        echo "Bad Luck";
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
            <input type="number" name="num" value="<?php echo $_POST['num'];?>"/>
            <input type="submit" name="submit" value="submit">
        </form>
</body>
</html>