<?php include_once("/model/pdo.php"); 

class danhmuc{

public static function getId_dm($id)
{

    $sql= "select * from danhmuc where MaDanhmuc ='$id'";
    $result = pdo_query($sql);
    return $result;
}

    public static function getAlldm()
    {
        $sql = "select * from danhmuc";
        $result = pdo_query($sql);
        return $result;
    }

public function update_DM($id,$tendm)
{

    $sql =  "UPDATE danhmuc SET Tendanhmuc = '$tendm' WHERE MaDanhmuc = '$id'";
    $result = pdo_execute($sql);
    return $result;
}

    public function deleteDM($Madm)
{

    $sql = "DELETE  FROM danhmuc WHERE MaDanhmuc = '$Madm' ";
    $result = pdo_execute($sql);
    return $result;
}
}









?>
