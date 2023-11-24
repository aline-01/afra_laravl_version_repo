
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta description -->
    <meta name="description"
          content="AppCo app landing page template or product landing page template helps you easily create websites for your app or product,  landing page template form promotion and many more.">
    <meta name="author" content="ThemeTags">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content=""/> <!-- website name -->
    <meta property="og:site" content=""/> <!-- website link -->
    <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content=""/> <!-- description shown in the actual shared post -->
    <meta property="og:image" content=""/> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content=""/> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article"/>

    <!--title-->
    <title>قالب صفحه فرود اپلیکیشن اپکو</title>

    <!--favicon icon-->
    <link rel="icon" href="img/favicon.png" type="image/png" sizes="16x16">

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
    <link rel="stylesheet" href="/css/responsive.css">

</head>
<body>
<?php 
include("includes/functions.php");

if (isset($_POST["submit"])) {
    $errors = array();
    $current_password = $_POST["current_password"];
    if (empty($current_password)) {
        array_push($errors,"رمز عبور فعلی را وارد کنید");
    }else {
        $hashed_password = $functions->hash_pass($current_password);
        $this_user1 = DB::table("users")->where("id",$this_user[0]->id)->where("password",$hashed_password)->get();
        if ($this_user1->Count() == 0) {
            array_push($errors,"the current password is unvalid");
        }
    }

    $new_password = $_POST["new_password"];
    if (empty($new_password)) {
        array_push($errors,"لطفا رمز عبور جدید را وارد کنید");
    }else if (strlen($new_password) < 8) {
        array_push($errors,"the password is must morethen 8 chars"); #translate this alien 
    }else {
        $new_pass_hash = $functions->hash_pass($new_password);

    }

    if (empty($errors)) {
        DB::table("users")->where("password",$hashed_password)->update(array(
            "password"=>$new_pass_hash,
        ));
        $functions->header_to_js("/users/panel");
    }

}


?>

<!--body content wrap start-->
<div class="main">

    <!--hero section start-->
    <section class="hero-section full-screen gray-light-bg">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">

                <div class="col-12 col-md-7 col-lg-6 col-xl-8 d-none d-lg-block">

                    <!-- Image -->
                    <div class="bg-cover vh-100 ml-n3 background-img" style="background-image: url(img/hero-bg-3.jpg);">
                        <div class="position-absolute login-signup-content">
                            <div class="position-relative text-white col-md-12 col-lg-7">
                                <h2 class="text-white">تغیر رمز عبور شما</h2>
                                <!-- <p class="lead">صورت خود را همیشه به سمت آفتاب نگه دارید - و سایه ها پشت سر شما قرار می گیرند. به طور مداوم طاقچه های کاملاً تحقیق شده را دنبال کنید در حالی که سیستم عامل های به موقع. وظیفه قابل اطمینان موازی کاتالیزورهای بهینه برای تغییر پس از کاتالیزورهای متمرکز برای تغییر.</p> -->
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-12 col-md-5 col-lg-6 col-xl-4 px-lg-6">
                    <div class="login-signup-wrap px-4 px-lg-5 my-5">
                        <!-- Heading -->
                        <h1 class="text-center mb-1">
                            تغییر رمز عبور
                        </h1>

                        <!-- Subheading -->
                        <p class="text-muted text-center mb-5">
                            رمز جدید را وارد کنید
                        </p>

                        <!-- Form -->
                        <form action="/users/change_pass" method="POST" class="login-signup-form">
                            @csrf
                            <div class="form-group">
                                <label class="pb-1">رمز فعلی</label>
                                <div class="input-group input-group-merge">
                                    <div class="input-icon">
                                        <span class="ti-lock color-primary"></span>
                                    </div>
                                    <input name="current_password" type="password" class="form-control" placeholder="رمز فعلی">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="pb-1">رمز جدید</label>
                                <div class="input-group input-group-merge">
                                    <div class="input-icon">
                                        <span class="ti-lock color-primary"></span>
                                    </div>
                                    <input name="new_password" type="password" class="form-control" placeholder="رمز جدید">
                                </div>
                            </div>
                            <?php 
                                    if (isset($_POST["submit"]) && !empty($errors)) {
                                        foreach ($errors as $err) {
                                            echo "<div class='alert alert-danger' role='alert'>";
                                                echo "{$err}";
                                            echo "</div>";
                                        }
                                    }
                                ?>
       
                            <!-- Submit -->
                            <button name="submit" class="btn btn-lg btn-block solid-btn border-radius mt-4 mb-3">
                                تغییر رمز
                            </button>

                            <!-- Link -->
                            <div class="text-center">
                                <small class="text-muted text-center">
                                    رمز عبور خود را به خاطر می آورید؟ <a href="login.html">ورود</a>.
                                </small>
                            </div>

                        </form>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div>
    </section>
    <!--hero section end-->

</div>
<!--body content wrap end-->

<!--jQuery-->
<script src="js/jquery-3.5.0.min.js"></script>
<!--Popper js-->
<script src="js/popper.min.js"></script>
<!--Bootstrap js-->
<script src="js/bootstrap.min.js"></script>
<!--Magnific popup js-->
<script src="js/jquery.magnific-popup.min.js"></script>
<!--jquery easing js-->
<script src="js/jquery.easing.min.js"></script>
<!--jquery ytplayer js
<script src="js/jquery.mb.YTPlayer.min.js"></script>-->
<!--wow js-->
<script src="js/wow.min.js"></script>
<!--owl carousel js-->
<script src="js/owl.carousel.min.js"></script>
<!--countdown js-->
<script src="js/jquery.countdown.min.js"></script>
<!--custom js-->
<script src="js/scripts.js"></script>
</body>

<!-- Mirrored from appco.themetags.com/rtl/change-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Jan 2021 07:50:59 GMT -->
</html>