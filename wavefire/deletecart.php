<?php
if (!empty($_POST['delete']))
{
    require ("/entities/cart.php");
    $student_id = isset($_POST['pro_id']) ? $_POST['pro_id'] : '';
    deleteStudent($student_id);
}

header("Location:viewCart.php")
?>