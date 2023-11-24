<?php 
$users_cookie = Cookie::get("users_access");
?>   
<!doctype html>
<html lang="en">
    
    <!-- Mirrored from appco.themetags.com/rtl/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Jan 2021 07:50:53 GMT -->
    <head>
    
    <!-- SEO Meta description -->
 
    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    
    <!--title-->
    <title>افرا تجارت غدیر</title>
    
    <!--favicon icon-->
    <link rel="icon" href="/img/photo/title_logo.jpg" type="/image/png" sizes="16x16">

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7COpen+Sans&amp;display=swap"
    rel="stylesheet">
    
    <!--Bootstrap css-->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!--Magnific popup css-->
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <!--Themify icon css-->
    <link rel="stylesheet" href="/css/themify-icons.css">
    <!--animated css-->
    <link rel="stylesheet" href="/css/animate.min.css">
    <!--ytplayer css-->
    <link rel="stylesheet" href="/css/jquery.mb.YTPlayer.min.css">
    <!--Owl carousel css-->
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <!--custom css-->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/style-rtl.css">
    <!--responsive css-->

    <!-- panel admin styles  -->
    <link rel="stylesheet" href="/css/responsive.css">
    <link rel='stylesheet' id='bootstrap-rtl-css' href='/css/user_panel/bootstrap-rtl.css' type='text/css' media='all' />
    <link rel='stylesheet' id='style-css' href='/css/user_panel/panel_styles.css' type='text/css' media='all' />
    <!-- panel admin styles  -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<!--header section start-->
<header class="header">
    <!--start navbar-->
    <nav class="navbar navbar-expand-lg fixed-top bg-transparent affix">
        <div class="container">
            <a class="navbar-brand" href="index-4.html"><img src="/img/afra_logo.jpg" width="50" alt="logo"class="img-fluid img-thumbnail"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-menu"></span>
            </button>

            <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link page-scroll" href="/index.php" id="navbarDropdownHome" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            خانه
                        </a>
                        <!-- <div class="dropdown-menu submenu" aria-labelledby="navbarDropdownHome"> -->
                            <!-- <a class="dropdown-item" href="index.html">دمو 1</a>
                            <a class="dropdown-item" href="index-2.html">دمو 2</a>
                            <a class="dropdown-item" href="index-3.html">دمو 3</a>
                            <a class="dropdown-item" href="index-4.html">دمو 4</a>
                            <a class="dropdown-item" href="index-5.html">دمو 5</a>
                            <a class="dropdown-item" href="index-6.html">دمو 6</a>
                            <a class="dropdown-item" href="index-7.html">دمو 7  <span class="badge badge-warning">جدید</span></a> -->
                        <!-- </div> -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="/info/about us">درباره</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link page-scroll" href="#features">امکانات</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="/pages/blog/price_list.php">قیمت ها</a>
                    </li>
                    <?php if (empty($users_cookie)) { ?>
                    <li class="nav-item">
                      <a class="nav-link page-scroll" href="/users/login">صفحه ورود </a>
                    </li>
                    <?php }else { ?>
                    <li class="nav-item">
                      <a class="nav-link page-scroll" href="/users/panel">پنل کاربری</a>
                    </li>
                    <?php } ?>
                    
    <?php 
        // $c_name = "users_access";
        // $value = 1;
        // $expire = time()+(300000000*8);
        // setcookie($c_name,$value,$expire,"/");
    ?>
                    <!-- <li class="nav-item">
                        <a class="nav-link page-scroll" href="#screenshots">اسکرین شات</a>
                    </li> -->
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link page-scroll dropdown-toggle" href="#" id="navbarDropdownPage" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            صفحات
                        </a> -->
                        <!-- <div class="dropdown-menu submenu" aria-labelledby="navbarDropdownPage"> -->
                            <!-- <a class="dropdown-item" href="login.html">صفحه ورود 2</a> -->
                            <!-- <a class="dropdown-item" href="basic-sign-up.html">صفحه ثبت نام </a> -->
                            <!-- <a class="dropdown-item" href="sign-up.html">صفحه ثبت نام  2</a> -->
                            <!-- <a class="dropdown-item" href="password-reset.html">بازیابی رمز</a> -->
                            <!-- <a class="dropdown-item" href="change-password.html">تغییر رمز</a> -->
                            <!-- <a class="dropdown-item" href="download.html">صفحه دانلود</a> -->
                            <!-- <a class="dropdown-item" href="review.html">صفحه نظرات</a> -->
                            <!-- <a class="dropdown-item" href="faq.html">سوالات متداول</a> -->
                            <!-- <a class="dropdown-item" href="404.html">صفحه 404</a> -->
                            <!-- <a class="dropdown-item" href="coming-soon.html">بزودی</a> -->
                            <!-- <a class="dropdown-item" href="thank-you.html">تشکر</a> -->
                            <!-- <a class="dropdown-item" href="team.html">صفحه تیم <span class="badge badge-danger badge-pill ml-2">جدید</span></a> -->
                            <!-- <a class="dropdown-item" href="team-single.html">تیم تک <span class="badge badge-danger badge-pill ml-2">جدید</span></a> -->
                        <!-- </div>
                    </li> -->
                    <!-- <li class="nav-item dropdown"> -->
                    <!-- dropdown-toggle -->
                        <!-- <a class="nav-link page-scroll "  href="/pages/blog/all_blogs.php" id="navbarBlogPage" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <span class="custom-nav-badge badge badge-danger badge-pill"></span>
                        </a> -->

                        <!-- <div class="dropdown-menu submenu" aria-labelledby="navbarBlogPage">
                            <a class="dropdown-item" href="blog-default.html">وبلاگ شبکه ای</a>
                            <a class="dropdown-item" href="blog-left-sidebar.html">سایدبار چپ</a>
                            <a class="dropdown-item" href="blog-single-right-sidebar.html">سایدبار راست</a>
                        </div> -->
                    <!-- </li> -->
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="/blog/All Blogs">وبلاگ</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link page-scroll" href="#team">تیم</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#contact">تماس</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
                <!--end navbar-->
</header>
<!--header section end-->
<?php


?>