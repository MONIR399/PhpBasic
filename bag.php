
<?php 
    if($_POST['num']>20000){
        echo "Gucci Bag <br>Gucci Bel";
    }
    elseif($_POST['num']>=10000)
    {
        echo "Gucci Bag";
    }
    elseif($_POST['num']>=5000){
        echo "Levis Bag";
    }
    else{
        echo "Something";
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