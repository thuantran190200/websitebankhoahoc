<?php
include_once("/entities/sanpham.php");
   $sanpham = new Sanpham();
   if (isset($_GET['Masp'])) {
       $id = $_GET['Masp'];
       $delete_sp = $sanpham->delete($id);
   } else {
   }
   ?>

<div class="grid_10">
	<div class="box round first grid">
		<h2>Danh Sách sản phẩm</h2>
		<div class="block">
			
	
  <!-- Modal HTML -->
  

			<a href="index.php">Trang chủ</a>
            <?php

if (isset($delete_sp)) {
    echo $delete_sp;
}
?>
			<table class="data display datatable" id="example">
				<thead>
					<tr>
						<th>Mã sản phẩm</th>
						<th>Tên sản phẩm</th>
						<th>giá</th>
						<th>IMG</th>
						<th>Mô tả</th>
						<th>Mã Danh mục</th>
						
						<th>Action</th>
					</tr>
				</thead>

				<tbody>
				<?php
				
				include_once("/entities/sanpham.php"); 


				$pords =Sanpham::getallSp();
				$result = $pords;
				foreach($result as $item)
				{

					extract($item);

					echo'
					<tr class="odd gradeX">
				   <td>'.$Masp.'</td>
				   <td>'.$Tensp.'</td>
				 
				   <td>'.$Gia.'</td>
				   <td>'.$img.'</td>
				   <td>'.$Mota.'</td>
                   <td>'.$MaDanhmuc.'</td>
				   <td>
				  <a href="?Masp='.$Masp.'">Xóa</a>
				   </td>
				 
				 
				  
	  ';
				}
				?>
			
		
				
				</tbody>
			</table>
			      

	
		</div>
	</div>
</div>


<?php
require ("/entities/cart.php");
$students = getAllStudents();
?>
 
<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title></title>
    


   
    <link href="@BotDetect.Web.CaptchaUrls.Absolute.LayoutStyleSheetUrl" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">

    <link href="layout/styles/cart.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
       

<table class="table">






<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<a href="#myModal" class="trigger-btn" data-toggle="modal"> <button class="btn btn-lg btn-block btn-success text-uppercase">Thêm sản phẩm</button></a>
    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
			<form method="post">
                    <div class="modal-header">
                        <h4 class="modal-title">Thanh toán</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Tên sản phẩm</label>
                            <input type="text" name="diachi" value="<?php echo isset($_POST["diachi"]) ? $_POST["diachi"] : "" ; ?>" />  
                        <div class="form-group">
                            <label>Giá</label>
                            <input name="hoten" type="text" value="<?php echo isset($_POST["hoten"]) ? $_POST["hoten"] : "" ; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Img</label>
                            <input name="sdt" type="text" value="<?php echo isset($_POST["sdt"]) ? $_POST["sdt"] : "" ; ?>" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Mô tả</label>
                            <input name="mail" type="text" value="<?php echo isset($_POST["mail"]) ? $_POST["mail"] : "" ; ?>"  class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Danh mục</label>

                          <select name="MaDanhmuc">
 <?php  include_once("/entities/danhmuc.php"); 
          
          $pords =danhmuc::getAlldm();
          $result = $pords;
          foreach($result as $item)
          {
            extract($item);
            echo ' <option value='.$MaDanhmuc.'>'.$Tendanhmuc.'</option>';

                         
                        

          }

          ?>
                          </select>
                        </div>
                    </div>
                 
                    <div class="modal-footer justify-content-between">
                      
                       
                        <input type="submit" name="submit" class="btn btn-primary" value="Thêm sản phẩm">
                    </div>
                </form>
            </div>
        </div>
    </div>



  
    <?php  include_once("/entities/add_sp.php"); ?>
 
	<?php
   

   if(isset($_POST["submit"])){

	   $diachi = $_POST["diachi"];
	  
$Tenkh=$_POST["hoten"];
$sdt=$_POST["sdt"];
$mail=$_POST["mail"];
$Madm = $_POST["MaDanhmuc"];
	   $newProduct = new sp( $diachi,$Tenkh,$sdt,$mail,$Madm);

	   $result = $newProduct ->save();
      
	  
	   if(!$result)
	   {
		  echo " thành công";
        
         
		 
	   }
	   else {
		  
	   }
   }
?>
 


    
<!-- Footer -->

    
    
</table>
   
</body>


<style>
    body {
        font-family: 'Varela Round', sans-serif;
    }
h2{

	text-align: center;
}
    .modal-login {
        width: 320px;
    }

        .modal-login .modal-content {
            border-radius: 1px;
            border: none;
        }

        .modal-login .modal-header {
            position: relative;
            justify-content: center;
            background: #f2f2f2;
        }

        .modal-login .modal-body {
            padding: 30px;
        }

        .modal-login .modal-footer {
            background: #f2f2f2;
        }

        .modal-login h4 {
            text-align: center;
            font-size: 26px;
        }

        .modal-login label {
            font-weight: normal;
            font-size: 13px;
        }

        .modal-login .form-control, .modal-login .btn {
            min-height: 38px;
            border-radius: 2px;
        }

        .modal-login .hint-text {
            text-align: center;
        }

        .modal-login .close {
            position: absolute;
            top: 15px;
            right: 15px;
        }

        .modal-login .checkbox-inline {
            margin-top: 12px;
        }

        .modal-login input[type="checkbox"] {
            position: relative;
            top: 1px;
        }

        .modal-login .btn {
            min-width: 100px;
            background: #3498db;
            border: none;
            line-height: normal;
        }

            .modal-login .btn:hover, .modal-login .btn:focus {
                background: #248bd0;
            }

        .modal-login .hint-text a {
            color: #999;
        }

    .trigger-btn {
        display: inline-block;
        margin: 100px auto;
    }
</style>
</html>












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