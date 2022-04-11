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
<title>Wavefire | Pages | Gallery</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

</head>
<body id="top">
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
          <div class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong>Alo Admin:</strong> 0389672882</span></div>
        </li>
        <li class="one_third">
          <div class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>mail:</strong> lehaidangxh@gmail.com</span></div>
        </li>
        <li class="one_third">
          <div class="block clear"><a href="#"><i class="fas fa-clock"></i></a> <span><strong> Hoạt Động:</strong> 08.00am - 18.00pm</span></div>
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
        <li class="active"><a href="/wavefire/index.html">Home</a></li>
        <li><a class="drop" href="">Nhớt</a>
          <ul>
            <li><a href="pages/gallery.html">Motul</a></li>
            <li><a href="pages/full-width.html">Resol</a></li>
            <li><a href="pages/sidebar-left.html">Fuchs</a></li>
            <li><a href="pages/sidebar-right.html">LiQui Moly</a></li>
            <li><a href="pages/basic-grid.html">CasTrol</a></li>
            
          </ul>
        </li>
        <li><a class="drop" href="#">Phuộc Xe</a>
          <ul>
         
            
          </ul>
        </li>
        <?php  include_once("/entities/danhmuc.php"); 
          
          $pords =danhmuc::getAlldm();
          $result = $pords;
          foreach($result as $item)
          {
            extract($item);


            echo' 
            
           
            <li><a href="Danhmuc.php?ID='.$MaDanhmuc.'">'.$Tendanhmuc.'</a></li>
            
            
            
            
            
            
            ';

          }
          ?>
      </ul>
    </nav>
    <!-- ################################################################################################ -->
    <div id="searchform">
      <div>
        <form action="#" method="post">
          <fieldset>
            <legend>Tìm Kiếm:</legend>
            <input type="text" placeholder="Enter search term&hellip;">
            <button type="submit"><i class="fas fa-search"></i></button>
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
      <p>Shop Đồ Chơi Xe Máy</p>
      <h3 class="heading">Hải Đăng Y15ZR</h3>
      <p>Chuyên Cung Cấp Đồ Chơi Xe Máy Chính Hãng</p>
      <footer><a class="btn" href="#">Trãi Nghiệm Ngay <i class="fas fa-angle-right"></i></a></footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- ################################################################################################ -->
      <div id="gallery">
        <figure>
          <header class="heading">Thông tin mâm xe </header>
          <?php  
    require_once("/model/pdo.php");
include_once("/entities/sanpham.php"); 
$item_per_page=!empty($_GET['per_page'])?$_GET['per_page']:1;
$current_page= !empty($_GET['page'])?$_GET['page']:1;


$offset= ($current_page - 1) * $item_per_page;
$sql = "SELECT  Masp, Tensp,Gia ,img FROM `sanpham`  ORDER by 'Masp' ASC LIMIT $item_per_page OFFSET $offset";
 $list = pdo_query($sql);
// $total= "SELECT Masp, Tensp,Gia ,img FROM sanpham";
// $t= pdo_query($total);




$con=mysqli_connect("localhost","root","","dcxemay");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT  Masp, Tensp,Gia ,img FROM sanpham where Masp=0";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  $talopage = ceil($rowcount / $item_per_page);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);











    // $pords= new Sanpham();
    $pords =Sanpham::SelectId($_GET['ID']);
    $result = $pords;
    foreach($result as $item)
    {
extract($item);

echo '<div class="col-4">

<img  name="img" value="'.$Img.'" src="'.$Img.'">

</a>

<form action="Detail" method="get">

<button tybe="submit" name="id" value="'.$Masp.'" >'.$Tensp.'</button>

</form>



<form   method="post">
<input type="text" value="'.$Tensp.'" name="tensp"  />

<input type="text" value="'.$Img.'" name="img"  />
<input type="text" value="'.$Gia.'" name="gia"  />
<input type="text" value="'.$Masp.'" name="ID"  />

<button type="submit" name="submitCart"  value=" ($is_update_action)  "  >  <i class="fas fa-shopping-cart"></i></button>
  

</form>


  

<div class="socials-share">
        <a class="bg-facebook"  style="color:blue;" href="https://www.facebook.com/sharer/sharer.php?u=https://www.facebook.com/All-RacingShop-106377424321048/?ref=pages_you_manage" target="_blank"><span class="fab fa-facebook"></span> Share</a>
        <a class="bg-email"  style="color:red;" href="https://mail.google.com/mail/u/0/?view=cm&fs=1&to&su=&body=https://www.facebook.com/All-RacingShop-106377424321048/?ref=pages_you_manage" target="_blank"><span class="fa fa-envelope"></span> Gmail</a>
    </div>

</div>




';

    }
    
    
    ?>
     
     

        

    </div>

</div>

      
<?php
          include './page.php';
       ?>

          <figcaption>Gallery Description Goes Here</figcaption>
        </figure>
      </div>
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
      <nav class="pagination">
        <ul>
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
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
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
      <p class="btmspace-30">KẾT NỐI VỚI CHÚNG TÔI<a href="#"><i class="fas fa-arrow-right"></i></a></p>
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
      <h6 class="heading">Sản Phẩm</h6>
      <ul class="nospace clear latestimg">
        <li><a href="#"><img src="images/demo/backgrounds/phuoc.jpg" alt=""></a></li>
        <li><a href="#"><img src="images/demo/backgrounds/nhot.jpg" alt=""></a></li>
        <li><a href="#"><img src="images/demo/backgrounds/mam.jpg" alt=""></a></li>
        <li><a href="#"><img src="images/demo/backgrounds/o.jpg" alt=""></a></li>
        <li><a href="#"><img src="images/demo/backgrounds/oc.jpg" alt=""></a></li>
        <li><a href="#"><img src="images/demo/backgrounds/vo.webp" alt=""></a></li>
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
           <li class = "dangki"> 
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
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
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
</body>
</html>