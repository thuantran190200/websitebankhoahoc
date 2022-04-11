<?php  include_once("/entities/order.php"); ?>
<?php
   

    if(isset($_POST["btnsubmit"])){

        $productName = $_POST["txtName"];
       

        $newProduct = new oder( $productName);

        $result = $newProduct ->save();
        if(!$result)
        {
           echo " thành công";
        }
        else {
           
        }
    }
?>




<form method="post">
    <div class="row">
        <div class="lbltitle">
            <label>Tên sản phẩm</label>
        </div>
        <div class="lblinput">
            <input type="text" name="txtName" value="<?php echo isset($_POST["txtName"]) ? $_POST["txtName"] : "" ; ?>" />  
        </div>
  
    <div class="row">
        <div class="submit">
            <input type="submit" name="btnsubmit" value="Thêm sản phẩm"/>
        </div>
    </div>
</form>
