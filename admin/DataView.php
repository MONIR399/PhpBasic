
<?php 
    include "dbConnect.php";

    $select="Select * from tbl_login";

    $query=$conn->query($select);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dataView</title>
</head>
<body>

<style>
     table{
            border-collapse: collapse;
            width: 50%;
        }
        th,td{
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even){
            background-color: #4CAF50;
        }
        th{
            background-color: #4CAF50;
            color: white;
        }

</style>

        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>User Name</th>
                <th>Password</th>
                <th>Action</th>

            </tr>
            </thead>
            <?php 
              

              while($row = $query->fetch_object())
            {
              

            
            
            ?>
            <tbody>
            <tr>
                <td><?php echo $row->id;?></td>
                <td><?php echo $row->full_name;?></td>
                <td><?php echo $row->user_name;?></td>
                <td><?php echo $row->password;?></td>
                <td><a href="login.php?id=<?php echo $row->id;?>">Edit</a>
                <a href="delete.php?id=<?php echo $row->id;?>">Delete</a></td>
            </tr>

            <?php } ?>
            </tbody>
        </table>
</body>
</html>
