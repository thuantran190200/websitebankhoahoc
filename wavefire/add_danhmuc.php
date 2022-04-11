<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<?php  include_once("/entities/product.class.php"); ?>

<?php
include_once("/entities/danhmuc.php");
   $danhmuc = new danhmuc();
   if (isset($_GET['MaDM'])) {
       $id = $_GET['MaDM'];
       $delete_dm = $danhmuc->deleteDM($id);
   } else {
   }
   ?>
<?php
  
   

    if(isset($_POST["btnsubmit"])){

        $productName = $_POST["txtName"];
       

        $newProduct = new Product( $productName);

        $result = $newProduct ->save();
        if(!$result)
        {
           echo " thành công";
           header("Location:add_danhmuc.php");
        }
        else {
           
        }
    }
?>




<form method="post">
    <div class="row">
        <div class="lbltitle">
            <label>Tên sản phẩm</label>
            <?php

			if (isset($delete_dm)) {
				echo $delete_dm;
			}
			?>
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

<body>



</body>



<div class="grid_10">
	<div class="box round first grid">
		<h2>Danh sách danh mục</h2>
		<div class="block">
			
         
			
			<table class="data display datatable" id="example">
				<thead>
					<tr>
						<th>Mã danh muc</th>
						<th>Tên danh mục</th>
						<th>Action</th>
					</tr>
				</thead>

				<tbody>
                <?php  include_once("/entities/danhmuc.php"); 
          
          $pords =danhmuc::getAlldm();
          $result = $pords;
          foreach($result as $item)
          {
            extract($item);
                        echo '	<tr class="odd gradeX">

                        <td>'.$MaDanhmuc.'</td>
                        <td>'.$Tendanhmuc.'</td>
                        <td>
                        <a   href="update_dm.php?MaDM='.$MaDanhmuc.'"><i class="fa fa-edit blue-color"></i></a>
				 <a   href="?MaDM='.$MaDanhmuc.'"><i  class="fa fa-trash" aria-hidden="true"  ></i></a>
				   </td>
                    </tr>';
						
          }
          ?>
				</tbody>
			</table>
		</div>
	</div>
</div>



<style>

table, th, td {
  border: 1px solid;
}
th,td{

	text-align: center;
}
th{

	color:red;
	margin: 3px;
}
 
</style>
