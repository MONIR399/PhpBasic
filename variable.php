<?php 
	echo "<span>Problem Solving-Part: 1</span> <br>";
	echo "Recently I heard that you�ve achieved <br>
95% marks in your exam.<br> This is brilliant! <br>
I wish you�ll shine in your life! 	Good <br>
luck with all the barriers(/\) in your life <br><br><br>";



echo "Practice Problem : 2 <br>";

echo $_POST['num1']."+".$_POST['num2']."=".$_POST['num1']+$_POST['num2']."<br>";
echo $_POST['num1']."-".$_POST['num2']."=".$_POST['num1']-$_POST['num2']."<br>";
echo $_POST['num1']."*".$_POST['num2']."=".$_POST['num1']*$_POST['num2']."<br>";
if( $_POST['num1']>0){
echo $_POST['num1']."/".$_POST['num2']."=".$_POST['num1']/$_POST['num2']."<br>";
}




?>

<html>
	<head>
	
	</head>
	<body>
		<form action="" method="post">
			<input type="number" name="num1" value="<?=$_POST['num1'];?>" />
			<input type="number" name="num2" value="<?=$_POST['num2'];?>"/>
			<input type="submit" name="submit" value="submit" />
		
		
		</form>
		
	</body>

</html>