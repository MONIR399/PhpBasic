
<?php 
    if($_POST['num']%2==0)
    {
        echo "Even";
    }
    else{
        echo "Odd";
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