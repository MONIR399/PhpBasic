
<?php 
   
        if($_POST['num']>0 && $_POST['num']%3==0)
        {
            echo "Yes<br>";
        }
        else
        {
            echo "No <br>";
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