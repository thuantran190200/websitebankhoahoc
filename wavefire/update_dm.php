
<?php
    include("/entities/danhmuc.php");
?>
<?php
if (isset($_GET['MaDM']) && $_GET['MaDM'] != NULL) {
    $id = $_GET['MaDM'];
} else {
    echo "<script>window.location = 'add_danhmuc.php'</script>";
}

$danhmuc = new danhmuc();
	if ($_SERVER['REQUEST_METHOD'] === 'POST'){
		$Tendm =  $_POST['ten_dm'];
        $update_dm = $danhmuc->update_DM($id,$Tendm);
        header("Location:add_danhmuc.php");
	}

?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Update danh mục </h2>
               <div class="block copyblock"> 
               <?php
            if (isset($update_dm)) {
                echo $update_dm;
            }
            ?>
           <?php 
              $pords =danhmuc::getId_dm($id);
              
              $result = $pords;
              foreach($result as $item)
              {
                  extract($item);
                  echo ' <form action="" method="POST">
                  <table class="form">
                      <tr>
                          <td>
                              <input type="text" name="MaDM" value="'.$MaDanhmuc.'" class="medium" disabled />
                          </td>
                          <td>
                              <input type="text" name="ten_dm" value="'.$Tendanhmuc.'" class="medium" />
                          </td>
                      </tr>
                      <tr>
                          <td>
                              <input type="submit" name="submit" Value="Save" />
                          </td>
                      </tr>
                  </table>
              </form>
     ' ;
              }
           
           
           ?>
                   
            
            
            <a href="add_danhmuc.php">Danh mục</a>
                </div>
            </div>
        </div>