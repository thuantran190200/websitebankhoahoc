<?php
include __DIR__ . '/model/pdo.php';
// include __DIR__ . '/entities/danhmuc.php';
require __DIR__ . '/entities/cart.php';

$data = array();
$errors = array();

$is_update_action = false;

$is_update_action = true;

if (!empty($_POST['submitCart'])) {
    $data['pro_id'] = isset($_POST['ID']) ? $_POST['ID'] : '';

    $data['pro_name'] = isset($_POST['tensp']) ? $_POST['tensp'] : '';
    $data['IMG'] = isset($_POST['img']) ? $_POST['img'] : '';
    $data['pro_gia'] = isset($_POST['gia']) ? $_POST['gia'] : '';

    $data['Soluong'] =  1;
    if (empty($errors)) {
        updateStudent($data['pro_id'], $data['pro_name'], $data['pro_gia'], $data['IMG']);
        header("Location:viewCart.php");
    }
}

?>

<!DOCTYPE html>

<html lang="">

<title>HẢI ĐĂNG Y15ZR</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/style.css" rel="stylesheet" type="text/css" media="all">

</head>

<body id="top">
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row0">
        <header id="header" class="hoc clear">
            <!-- ################################################################################################ -->
            <div id="logo" class="one_quarter first">
                <h1><a href="index.php"><span>Y</span>15<span>Z</span>R</a></h1>
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
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a class="drop" href="admin/loginAdmin.php">Nhớt</a>

                    </li>
                    <li><a class="drop" href="#">Phuộc Xe</a>
                        <?php include __DIR__ . "/entities/danhmuc.php";

                        $pords = danhmuc::getAlldm();
                        $result = $pords;
                        foreach ($result as $item) {
                            extract($item);


                            echo ' <li><a href="Danhmuc.php?ID=' . $MaDanhmuc . '">' . $Tendanhmuc . '</a></li> ';
                        }

                        ?>
                    </li>


                </ul>
            </nav>
            <!-- ################################################################################################ -->
            <div id="searchform">
                <div>
                    <form action="search.php?quanly=timkiem" method="POST">

                        <fieldset>
                            <legend>Tìm Kiếm:</legend>
                            <input type="text" placeholder="Nhập tên tìm kiếm&hellip;" name="tukhoa" style="color: black; background:beige" />
                            <button type="submit" name="timkiem"><i class="fas fa-search"></i></button>
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
        <div id="pageintro" class="hoc clear">
            <!-- ################################################################################################ -->
            <article>
                <p style="color:antiquewhite;"> Shop đồ chơi xe máy </p>
                <h3 class="heading">Hải Đăng Y15ZR</h3>
                <p style="color:antiquewhite;">Chuyên Cung Cấp Đồ Chơi Xe Máy Chính Hãng</p>
                <footer><a class="btn" href="#">Trãi Nghiệm Ngay <i class="fa fa-angle-right"></i></a></footer>
            </article>
            <!-- ################################################################################################ -->
        </div>
    </div>

    <div class="wrapper row2">
        <section class="hoc container clear">
            <!-- ################################################################################################ -->
            <div class="sectiontitle">
                <h6 class="heading">Thông Tin tìm kiếm</h6>
                <p>Tham Gia Và Liên Hệ Trực Tiếp Tại Đây</p>
            </div>

            <div class="small-container">
                <h2 class="title"> Sản phẩm tìm kiếm: </h2>
                <h3> sản phẩm tìm kiếm: <?php echo $_POST['tukhoa'] ?></h3>
                <div class="row">

                    <?php
                    require_once __DIR__ . "/model/pdo.php";
                    include_once __DIR__ . "/entities/sanpham.php";
                    $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 1;
                    $current_page = !empty($_GET['page']) ? $_GET['page'] : 1;

                    if (isset($_POST['tukhoa'])) {
                        $tukhoa = $_POST['tukhoa'];
                    } else {
                        $tukhoa = '';
                    }
                    $offset = ($current_page - 1) * $item_per_page;
                    $sql = "SELECT  Masp, Tensp,Gia ,img FROM `sanpham` WHERE `Tensp` Like '%" . $tukhoa . "%' OR `Mota` LIKE '%" . $tukhoa . "%'";


                    $list = pdo_query($sql);


                    // $total= "SELECT Masp, Tensp,Gia ,img FROM sanpham";
                    // $t= pdo_query($total);




                    $con = mysqli_connect("localhost", "root", "", "dcxemay");
                    // Check connection
                    if (mysqli_connect_errno()) {
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }

                    $sql = "SELECT  Masp, Tensp,Gia ,img FROM sanpham";

                    if ($result = mysqli_query($con, $sql)) {
                        // Return the number of rows in result set
                        $rowcount = mysqli_num_rows($result);
                        $talopage = ceil($rowcount / $item_per_page);
                        // Free result set
                        mysqli_free_result($result);
                    }

                    mysqli_close($con);


                    // $pords= new Sanpham();
                    // $pords = Sanpham::getall(1);
                    // $result = $pords;
                    if ($list == null) {
                        echo '<h1>Không tìm thấy sản phẩm cần tìm kiếm</h1>';
                    }
                    foreach ($list as $item) {
                        extract($item);

                        echo '<div class="col-4">
                                <img name="img" value="' . $img . '" src="' . $img . '">

                                </a>

                                <form action="Detail" method="get">

                                <button tybe="submit" name="id" value="' . $Masp . '" >' . $Tensp . '</button>

                                </form>
                                <form   method="post">
                                <h2>' . $Tensp . ' </h2>
                                <input type="text" value="' . $Tensp . '" name="tensp"  />

                                <input type="text" value="' . $img . '" name="img"  />
                                
                                <input type="text" value="' . $Gia . '" name="gia"  />
                                
                                <input type="text" value="' . $Masp . '" name="ID"  />

                                <button type="submit" name="submitCart"  value=" ($is_update_action)  "  >  <i class="fas fa-shopping-cart"></i></button>
                                
                                </form>

                                <div class="socials-share">
                                    <a class="bg-facebook"  style="color:blue;" href="https://www.facebook.com/sharer/sharer.php?u=https://www.facebook.com/All-RacingShop-106377424321048/?ref=pages_you_manage" target="_blank"><span class="fab fa-facebook"></span> Share</a>
                                    <a class="bg-email"  style="color:red;" href="https://mail.google.com/mail/u/0/?view=cm&fs=1&to&su=&body=https://www.facebook.com/All-RacingShop-106377424321048/?ref=pages_you_manage" target="_blank"><span class="fa fa-envelope"></span> Gmail</a>
                                </div>
                            </div>';
                    }

                    ?>


                </div>

            </div>


            <?php
            include __DIR__ . './page.php';
            ?>


    </div>


    </div>
    <div id="latest" class="group">
        <article class="one_third first"><a class="imgover" href="https://www.facebook.com/groups/310173003295730"><img src="images/demo/backgrounds/Capture.PNG" alt=""></a>
            <div class="excerpt">
                <h6 class="heading">Group</h6>

                <footer><a href="#">Read More <i class="fas fa-angle-right"></i></a></footer>
            </div>
        </article>
        <article class="one_third"><a class="imgover" href="https://www.facebook.com/All-Racing-106377424321048"><img src="images/demo/backgrounds/page.PNG" alt=""></a>
            <div class="excerpt">
                <h6 class="heading">Fanpage</h6>

                <footer><a href="#">Read More <i class="fas fa-angle-right"></i></a></footer>
            </div>
        </article>
        <article class="one_third"><a class="imgover" href="https://www.facebook.com/profile.php?id=100006421546739"><img src="images/demo/backgrounds/ad.PNG" alt=""></a>
            <div class="excerpt">
                <h6 class="heading">My Facebook profile</h6>

                <footer><a href="#">Read More <i class="fas fa-angle-right"></i></a></footer>
            </div>
        </article>
    </div>
    <footer class="center"><a class="btn" href="#">Tìm Hiểu <i class="fas fa-angle-right"></i></a></footer>
    <!-- ################################################################################################ -->
    </section>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row4">
        <footer id="footer" class="hoc clear">
            <!-- ################################################################################################ -->
            <div class="one_third first">
                <h6 class="heading">Thông Tin Liên Hệ</h6>
                <p>
                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0" nonce="DBS201D0"></script>
                <div class="fb-page" data-href="https://www.facebook.com/All-RacingShop-106377424321048/" data-tabs="timeline" data-width="350" data-height="70" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/All-RacingShop-106377424321048/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/All-RacingShop-106377424321048/">All RacingShop</a></blockquote>
                </div>
                </p>
            </div>
            <div class="one_third">
                <h6 class="heading">Sản Phẩm</h6>
                <ul class="nospace clear latestimg">
                    <li><a href="#"><img src="images/demo/backgrounds/phuoc.jpg" alt=""></a></li>
                    <li><a href="#"><img src="images/demo/backgrounds/nhot.jpg" alt=""></a></li>
                    <li><a href="#"><img src="images/demo/backgrounds/mam.jpg" alt=""></a></li>
                    <li><a href="#"><img src="images/demo/backgrounds/o.jpg" alt=""></a></li>
                    <li><a href="#"><img src="images/demo/backgrounds/oc.jpg" alt=""></a></li>
                    <li><a href="pages/voxe.html"><img src="images/demo/backgrounds/vo.webp" alt=""></a></li>
                </ul>
            </div>
            <div class="one_third">
                <h6 class="heading">Map chỉ đường</h6>
                <form method="post" action="#">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4057.5913281048647!2d106.59036318011049!3d10.782576251267674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752d3a4004bf0d%3A0xb92afde684c0436f!2zNSDEkMaw4budbmcgQ8OieSBDw6FtLCBCw6xuaCBIxrBuZyBIb8OgIEIsIELDrG5oIFTDom4sIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1626252341678!5m2!1svi!2s" width="350" height="225" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </form>
            </div>
            <!-- ################################################################################################ -->
        </footer>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->

    <div class="zalo-chat-widget" data-oaid="579745863508352884" data-welcome-message="Rất vui khi được hỗ trợ bạn!" data-autopopup="1000" data-width="350" data-height="420"></div>


    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
    <!-- JAVASCRIPTS -->
    <script src="layout/scripts/jquery.min.js"></script>
    <script src="https://sp.zalo.me/plugins/sdk.js"></script>
    <script src="layout/scripts/jquery.backtotop.js"></script>
    <script src="layout/scripts/jquery.mobilemenu.js"></script>

    <div class="call-mobile2">
        <a data-animate="fadeInDown" href="https://zalo.me/0389672882" target="_blank" class="button success1" style="border-radius:99px;" data-animated="true">
            <span>Chat Zalo </span>
        </a>
    </div>

    <div class="call-mobile1">
        <a data-animate="fadeInDown" href="https://business.facebook.com/latest/inbox/messenger" target="_blank" class="button success2" style="border-radius:99px;" data-animated="true">
            <span>Chat Facebook</span>
        </a>
    </div>

    <div class="call-mobile">
        <a id="callnowbutton" href="tel:0389672882">Gọi 0389672882</a>
    </div>

    <style>
        .success1.is-underline:hover,
        .success1.is-outline:hover,
        .success1 {
            background-color: #1E73BE;
            padding: 0 5px;
            color: white !important;
        }

        .success2.is-underline:hover,
        .success2.is-outline:hover,
        .success2 {
            background-color: #ff4800;
            padding: 0 5px;
            color: white !important;
        }

        .call-mobile {
            background: #00a63f;
            position: fixed;
            bottom: 10px;
            height: 40px;
            line-height: 40px;
            padding: 7px 0px 0 0px;
            border-radius: 40px;
            color: #fff;
            left: 20px;
            z-index: 99999;
        }

        .call-mobile1 {
            position: fixed;
            bottom: 55px;
            height: 40px;
            line-height: 40px;
            padding: 0 0px 0 0px;
            border-radius: 40px;
            color: #fff;
            left: 20px;
            z-index: 99999;
        }

        .call-mobile2 {
            position: fixed;
            bottom: 100px;
            height: 40px;
            line-height: 40px;
            padding: 0 0px 0 0px;
            border-radius: 40px;
            color: #fff;
            left: 20px;
            z-index: 99999;
        }

        .call-mobile i {
            font-size: 20px;
            line-height: 40px;
            background: #B52026;
            border-radius: 100%;
            width: 40px;
            height: 40px;
            text-align: center;
            float: right;
        }

        .call-mobile a {
            color: #fff;
            font-size: 15px;
            font-weight: bold;
            text-decoration: none;
            margin-right: 10px;
            padding-left: 10px;
        }

        .button span {
            text-transform: initial;
            font-weight: 400;
            font-family: poppins;
        }

        a#callnowbutton {
            font-family: poppins;
            font-weight: 400;
        }
    </style>




</body>

</html>