


<?php 
    include("dbConnect.php");

    $msg="";
        if(isset($_POST['submit']))
        {
                $full_name=$_POST['full_name'];
                $user_name=$_POST['user_name'];
                $password=$_POST['password'];
        

    $sql="Insert into tbl_login (full_name,user_name,password) values('".$full_name."','".$user_name."','".$password."')";

    $query=$conn->query($sql);

    if($query==true)
    {
        $msg="Data Insert Successfull.";
    }
    else
    {
        $msg="Data Error.";
    }

    header('Location:DataView.php');

}

if(isset($_GET['id']))
{
    $id=$_GET['id'];

    $sql="Select * from tbl_login where id='".$id."'";

    $query3=$conn->query($sql);

    $row=$query3->fetch_object();
}

if(isset($_POST['update']))

{
    
    $full_name=$_POST['full_name'];
    $user_name=$_POST['user_name'];
    $password=$_POST['password'];


    $sql2="Update tbl_login set full_name='".$full_name."', user_name='".$user_name."',
     password='".$password."' where id='".$id."' ";

     $query2=$conn->query($sql2);

     if($query2==true){
        $msg="Update Successull.";
     }
     else
     {
        $msg="Update Error.";
     }

     header('Location:DataView.php');
}



?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
        <form action="" method="post" align="center" style="border: 1px solid black; width:400px; padding:20px;">
                <h4><?php echo $msg;?></h4>
                <label for="">ID</label>
                <input readonly type="text" name="id" value="<?php echo $row->id ?? '';?>"><br><br>
                <label>Full Name:</label>
                <input type="text" name="full_name" id="full_name" value="<?php echo $row->full_name??'';?>"> <br><br>
                <label for="">User Name:</label>
                <input type="text" name="user_name" id="user_name" value="<?php echo $row->user_name??'';?>"><br><br>
                <label for="">Password:</label>
                <input type="password" name="password" id="password" value="<?php echo $row->password??'';?>"> <br><br>
               <?php 
                if(isset($_GET['id']))
                {
                ?>
                <input type="submit" name="update" value="Update">
                <?php } else
                {
                ?>
                <input type="submit" name="submit" value="Submit">

                <?php } ?>

        </form>
</body>
</html>