<?php
require ("/entities/cart.php");
$students = getAllStudents();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sinh viên</title>
</head>
<body>
    <a href="student_add.php">THÊM</a>
    <table border ="1" cellspacing="0" cellpadding="10">
        <tr>
            <td>ID</td>
            <td>Fullname</td>
            <td>Birthday</td>
        
            <td>Action</td>
           
        </tr>
        <?php foreach ($students as $item){
             ?>
        <tr>
            <td><?php echo $item['pro_id']; ?></td>
            <td>
               <?php echo $item['pro_name']; ?></a>
            </td>
            <td><?php echo $item['pro_gia'];?></td>

        </tr>
        <?php } ?>
    </table>
</body>
</html>