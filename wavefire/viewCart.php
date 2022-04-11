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
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.html">Y15ZR</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">


            <form class="form-inline my-2 my-lg-0">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Search...">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary btn-number">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
                <a class="btn btn-success btn-sm ml-3" href="cart.html">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="badge badge-light"> </span>
                </a>
            </form>
        </div>
    </div>
</nav>
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Giỏ hàng Y15ZR </h1>
    </div>
</section>

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Danh mục</th>
                            <th scope="col" class="text-center">Số lượng</th>
                            <th scope="col" class="text-right">Giá</th>
                            <th> </th>
                        </tr>
                    </thead>

                    <?php foreach ($students as $item){
                        
             ?>
                   
                        <tbody>
                            <tr>
                                <td><img src="<?php echo $item['IMG']; ?>" style="width: 100px; height:100px;" /> </td>
                                <td><?php echo $item['pro_name']; ?></td>
                                <td><?php echo $item['pro_id']; ?></td>
                                <td><?php echo $item['Soluong']; ?></td>
                                <td>
                                  
                                        <input class="form-control" type="number" value=" <?php echo $item['Soluong']; ?>" name="quantity">
                                        <input type="hidden" value="<?php echo $item['Soluong']; ?>" name="IDSanpham" />
                                        <input type="submit" value="Cập nhật" />
                                    
                                </td>
                                <td class="text-right"><?php echo $item['pro_gia'];?></td>

                                
                                <td class="text-right">
                                    
                                <form method="post" action="deletecart.php">
                    <input type="hidden" value="<?php echo $item['pro_id']; ?>" name="pro_id"/>
                    <input onclick="return confirm('Bạn có chắc muốn xóa sinh viên này hay không?');" type="submit" value="Delete" name="delete"/>
                </form> </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Tổng tiền</td>
                                  
                            
                                <td class="text-right"></td>
                            </tr>

                        </tbody>

                        <?php } ?>

                   
                    <tfoot>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Shipping</td>
                            <td class="text-right">6,90 €</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Tiền phải thanh toán </strong></td>
                            <td class="text-right"><strong>Tổng tiền </strong></td>
                        </tr>
                    </tfoot>

                </table>
            </div>
        </div>

        <div class="col mb-2">

            <div class="row">
                <div class="col-sm-12  col-md-6">

                    <a href="~/Home/Trangchu"> <button class="btn btn-block btn-light">Tiếp tục mua sắm</button></a>

                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <a href="#myModal" class="trigger-btn" data-toggle="modal"> <button class="btn btn-lg btn-block btn-success text-uppercase">Thanh Toán</button></a>

                  

                </div>
            </div>
        </div>
    </div>
</div>

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
                            <label>Địa chỉ giao hàng</label>
                            <input type="text" name="diachi" value="<?php echo isset($_POST["diachi"]) ? $_POST["diachi"] : "" ; ?>" />  
                        <div class="form-group">
                            <label>Họ Tên</label>
                            <input name="hoten" type="text" value="<?php echo isset($_POST["hoten"]) ? $_POST["hoten"] : "" ; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>SĐT</label>
                            <input name="sdt" type="text" value="<?php echo isset($_POST["sdt"]) ? $_POST["sdt"] : "" ; ?>" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Mail</label>
                            <input name="mail" type="text" value="<?php echo isset($_POST["mail"]) ? $_POST["mail"] : "" ; ?>"  class="form-control" >
                        </div>
                    </div>
                 
                    <div class="modal-footer justify-content-between">
                      
                       
                        <input type="submit" name="submit" class="btn btn-primary" value="Thanh Toán">
                    </div>
                </form>
            </div>
        </div>
    </div>


    <?php  include_once("/entities/order.php");
     include_once("/entities/oderdetail.php");
    
    
    ?>
<?php
   

    if(isset($_POST["submit"])){

        $diachi = $_POST["diachi"];
       
$Tenkh=$_POST["hoten"];
$sdt=$_POST["sdt"];
$mail=$_POST["mail"];
        $newProduct = new oder("", $diachi,$Tenkh,$sdt,$mail);
              
        $result = $newProduct ->save();
      
        if(empty($result))
        {

            foreach($students as $item)

            {
                extract($item);
    
            
                $newdetail = new oderdetail($Soluong,$pro_gia,$pro_id,$sdt);
    
     $result = $newdetail ->save();
                  
                         $students = deleteall();
                        
                    
               
             
            }

        }
        else{

            echo ' roong';
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
