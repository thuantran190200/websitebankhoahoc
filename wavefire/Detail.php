<!DOCTYPE html>
<!--
Template Name: Wavefire
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<link href="layout/styles/demo.css" rel="stylesheet" type="text/css" media="all">
</head>
<body >
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<div class="wrapper row0">
    <header id="header" class="hoc clear">
        <!-- ################################################################################################ -->
        <div id="logo" class="one_quarter first">
            <h1><a href="/wavefire/index.html"><span>Y</span>15<span>Z</span>R</a></h1>
        </div>
        <div class="three_quarter">
            <ul class="nospace clear">
                <li class="one_third first">
                    <div class="block clear"><a href="#"><i class="fa fa-phone"></i></a> <span><strong>Alo Admin:</strong> 0389672882</span></div>
                </li>
                <li class="one_third">
                    <div class="block clear"><a href="#"><i class="fa fa-envelope"></i></a> <span><strong>mail:</strong> lehaidangxh@gmail.com</span></div>
                </li>
                <li class="one_third">
                    <div class="block clear"><a href="#"><i class="fa fa-clock"></i></a> <span><strong> Hoạt Động:</strong> 08.00am - 18.00pm</span></div>
                </li>
            </ul>
        </div>
        <!-- ################################################################################################ -->
    </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
    <section class="hoc clear">
        <!-- ################################################################################################ -->
        <nav id="mainav">
            <ul class="clear">
                <li class="active"><a href="~/Home/Trangchu">Home</a></li>
                <li>
                    <a href="~/Danhmuc/Nhot">Nhớt</a>

                </li>
                </li>
                <li>
                    <a t href="~/Danhmuc/Phuocxe">Phuộc Xe</a>

                </li>
                <li><a href="~/Danhmuc/mamxe">Mâm Xe</a></li>
                <li><a href="~/Danhmuc/octitan">Ốc Titan</a></li>
                <li><a href="#">Đồ Chơi Xe</a></li>
                <li><a href="~/Danhmuc/voxe">Vỏ Xe</a></li>
            </ul>
        </nav>
        <!-- ################################################################################################ -->
        <div id="searchform">
            <div>
                <form action="#" method="post">
                    <fieldset>
                        <legend>Tìm Kiếm:</legend>
                        <input type="text" placeholder="Enter search term&hellip;">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </fieldset>
                </form>
            </div>
        </div>
        <!-- ################################################################################################ -->
    </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/bb.jpg');">
    <div id="breadcrumb" class="hoc clear">
        <!-- ################################################################################################ -->
        <article>
            <p style="color:aliceblue;">Shop Đồ Chơi Xe Máy</p>
            <h3 class="heading">Hải Đăng Y15ZR</h3>
            <p style="color:aliceblue;">Chuyên Cung Cấp Đồ Chơi Xe Máy Chính Hãng</p>
            <footer><a class="btn" href="#">Trãi Nghiệm Ngay <i class="fa fa-angle-right"></i></a></footer>
        </article>
        <!-- ################################################################################################ -->
    </div>
</div>
<!-- ################################################################################################ -->



       

<main class="container">
<?php  include_once("/entities/sanpham.php");
$po=Sanpham::SelectId($_GET["id"]);

$result = $po;
foreach($result as $item)
{

    extract($item);
    echo ' <div class="left-column">
    <img data-image="black" src="images/black.png" alt="">
    <img data-image="blue" src="images/blue.png" alt="">
    <img data-image="red" class="active" src="'.$Img.'" alt="">
</div>


<!-- Right Column -->
<div class="right-column">

    <!-- Product Description -->
    <div class="product-description">
        <span>'.$Tensp.'</span>
        <h1>gia </h1>
        <p>'.$Mota.'</p>
    </div>
    <div class="product-configuration">

    <!-- Product Color -->
    <div class="product-color">
        <span>Màu</span>

        <div class="color-choose">
            <div>
                <input data-image="red" type="radio" id="red" name="color" value="red" checked>
                <label for="red"><span></span></label>
            </div>
            <div>
                <input data-image="blue" type="radio" id="blue" name="color" value="blue">
                <label for="blue"><span></span></label>
            </div>
            <div>
                <input data-image="black" type="radio" id="black" name="color" value="black">
                <label for="black"><span></span></label>
            </div>
        </div>

    </div>

    <!-- Cable Configuration -->
    <div class="cable-config">
        <span>Y15ZR</span>

        <div class="cable-choose">
            <button></button>
            <button></button>
            <button></button>
        </div>

        <a href="#">Hải Đăng Y15ZR</a>
    </div>
</div>


<!-- Product Pricing -->
<div class="product-price"></div>
    <span>'.$Gia.'</span>
    <a href="~/cart/AddtoCard/@Model.IDSanpham" class="cart-btn">Thêm giỏ hàng</a>
</div>


</div>
</main>
<p>

</p>
    
    
    ';
}




?>
    <!-- Left Column / Headphones Image -->
   


   

        <!-- Product Configuration -->
      
<!-- Code đăng bình luận-->


<br />
<hr />
<div class="col-md-10">
    <h4>Ý kiến sản phẩm</h4>
    <form action="#" method="post">
        <textarea placeholder="Viết bình luận..." class="form-control" rows="5" cols="100"></textarea><br />
        <input type="submit" value="Gửi ý kiến" class="cart-btn" />
    </form>
</div>
<hr />
<!--code





<div class="wrapper row3">
    <main class="hoc container clear">
 
        <nav class="pagination">
            @*<ul>
                <li><a href="#">&laquo; Previous</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><strong>&hellip;</strong></li>
                <li><a href="#">6</a></li>
                <li class="current"><strong>7</strong></li>
                <li><a href="#">8</a></li>
                <li><a href="#">9</a></li>
                <li><strong>&hellip;</strong></li>
                <li><a href="#">14</a></li>
                <li><a href="#">15</a></li>
                <li><a href="#">Next &raquo;</a></li>
            </ul>*@
        </nav>
     
</div>


<div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
    <footer id="footer" class="hoc clear">
        <!-- ################################################################################################ -->
        <div class="one_third first">
            <h6 class="heading">Thông Tin Liên Hệ</h6>
            <p>Số 5 cây cám khu phố 1 bình hưng hòa B  Bình Tân HCM.</p>
            <p class="btmspace-30">KẾT NỐI VỚI CHÚNG TÔI<a href="#"><i class="fa fa-arrow-right"></i></a></p>
            <ul class="faico clear">
                <li><a class="faicon-dribble" href="#"><i class="fab fa-dribbble"></i></a></li>
                <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
                <li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
                <li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a class="faicon-vk" href="#"><i class="fab fa-vk"></i></a></li>
            </ul>
        </div>



        <div class="one_third">
            <h6 class="heading">Đăng Nhập Để Mua Hàng</h6>
            <form method="post" action="#">
                <fieldset>
                    <legend>Newsletter:</legend>
                    <input class="btmspace-15" type="text" value="" placeholder="Name">
                    <input class="btmspace-15" type="text" value="" placeholder="Email">

                    <ul class="dangnhap">
                        <li class="dangki">
                            <button type="submit" value="submit">Submit</button>

                        </li>
                        <li> <button type="submit" value="submit">Submit</button></li>
                    </ul>
                </fieldset>
            </form>
        </div>
        <!-- ################################################################################################ -->
    </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
    <div id="copyright" class="hoc clear">
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
    </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
<!-- JAVASCRIPTS --><
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>