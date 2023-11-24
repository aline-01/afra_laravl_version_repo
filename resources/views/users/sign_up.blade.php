<?php include("includes/layouts/header.blade.php"); ?>
<?php include("includes/functions.php"); ?>
<?php use App\Models\Ausers; ?>
<?php 

if (isset($_SESSION["user_registred"])) {
    session_destroy();
}

if (isset($_POST["register"])) {
    $errors = array();

    $mobile_number = $_POST["m_number"];
    if (empty($mobile_number)) {
        array_push($errors,"شماره موبایل را وارد کنید");
    }else if (strlen($mobile_number) > 14 || strlen($mobile_number) < 8) {
        array_push($errors,"یک شماره موبایل معتبر وارد کنید");
    }else if (!$functions->check_uniqe_number($mobile_number)) {
        array_push($errors,"این شماره توسط کاربر دیگر استفاده می شود یک شماره جدید انتخاب کنید");
    }


    $side = $_POST["side"];
    if (empty($side)) {
        array_push($errors,"سمت خود را درج کنید");
    }

    $corp_name = $_POST["corp_name"];
    if (empty($corp_name)) {
        array_push($errors,"نام شرکت را درج کنید");
    }

    $fl_name = $_POST["fl_name"];
    if (empty($fl_name)) {
        array_push($errors,"نام و نام خانوادگی خود را وارد کنید");
    }

    $address = $_POST["address"];
    if (empty($address)) {
        array_push($errors,"آدرس را وارد کنید");
    }

    $valid_state = ["اصفهان","کرج","ارومیه","بوشهر","تهران","شیراز","کرمان","بندرعباس"];
    $state = $_POST["state"];
    if (empty($state)) {
        array_push($errors,"نام استان را وارد کنید");
    }else {
        $is_unvalid = 0;
        foreach($valid_state as $states) {
            if ($states != $state) {
                $is_unvalid+=1;
            }
            if ($is_unvalid == count($valid_state)) {
                array_push($errors,"enter from selectbox option \nmay you try yo hak us !!!");
            }
        }
    }

    $product_needed = $_POST["need_product"];
    if (empty($product_needed)) {
        array_push($errors,"محصول مورد نیاز خود را وارد کنید");
    }

    $password = $_POST["password"];
    if (empty($password)) {
        array_push($errors,"رمز عبور خود را وارد کنید");
    }else if (strlen($password) < 8) {
        array_push($errors,"رمز عبور حداقل باید ۸ کارکتر باشد");
    }else {
        $hashed_password = $functions->hash_pass($password);
    }

    
    $register_date = $functions->get_date();
    $last_login = $functions->get_date();
    if (empty($errors)) {
        Ausers::create([
            "fl_name"=>$fl_name,
            "mobile_number"=>$mobile_number,
            "corp_name"=>$corp_name,
            "side"=>$side,
            "address"=>$address,
            "state"=>$state,
            "need_product"=>$product_needed,
            "password"=>$hashed_password,
            "register_date"=>$register_date,
            "last_login"=>$last_login,
        ]);
        
        $last_user = Ausers::latest("id")->get();
        Cookie::queue(Cookie::make("users_access",$last_user[0]->id,30));
        $functions->header_to_js("/users/panel");

    }


    
    
}


?>
<div class="main">

    <!--hero section start-->
    <section class="hero-section ptb-100 background-img full-screen"
             style="background: url('img/hero-bg-1.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row align-items-center justify-content-between pt-5 pt-sm-5 pt-md-5 pt-lg-0">
                <div class="col-md-7 col-lg-6">
                    <div class="hero-content-left text-white">
                        <h1 class="text-white">حساب کاربری برای خود بسازید</h1>
                        <p class="lead">
                            صورت خود را همیشه به سمت آفتاب نگه دارید - و سایه ها پشت سر شما قرار می گیرند.
                        </p>
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="card login-signup-card shadow-lg mb-0">
                        <div class="card-body px-md-5 py-5">
                            <div class="mb-5">
                                <h6 class="h3">ایجاد حساب کاربری</h6>
                                <p class="text-muted mb-0">توسعه دهندگان با عشق توسط توسعه دهندگان ساخته شده اند.</p>
                            </div>
                            <form action="/users/sign_up" method="POST" class="login-signup-form">
                            @csrf
                            <div class="form-group">
                                    <!-- Label -->
                                    <label class="pb-1">
                                    شماره همراه
                                    </label>
                                    <!-- Input group -->
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-user color-primary"></span>
                                        </div>
                                        <input type="text" name="m_number" class="form-control" placeholder="شماره همراه">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <!-- Label -->
                                    <label class="pb-1">
                                    سمت
                                    </label>
                                    <!-- Input group -->
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-user color-primary"></span>
                                        </div>
                                        <input type="text" name="side" class="form-control" placeholder="سمت">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <!-- Label -->
                                    <label class="pb-1">
                                    نام شرکت
                                    </label>
                                    <!-- Input group -->
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-user color-primary"></span>
                                        </div>
                                        <input type="text" name="corp_name" class="form-control" placeholder="نام شرکت">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <!-- Label -->
                                    <label class="pb-1">
                                    نام و نام خانوادگی
                                    </label>
                                    <!-- Input group -->
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-user color-primary"></span>
                                        </div>
                                        <input type="text" name="fl_name" class="form-control" placeholder="نام شرکت">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <!-- Label -->
                                    <label class="pb-1">
                                    نشانی
                                    </label>
                                    <!-- Input group -->
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-user color-primary"></span>
                                        </div>
                                        <input type="text" name="address" class="form-control" placeholder="نام شرکت">
                                    </div>
                                </div>
                                <div class="form-group">
                                   <label for="exampleFormControlSelect1">استان</label>
                                   <select class="form-control" name="state" id="exampleFormControlSelect1">
                                     <option>اصفهان</option>
                                     <option>کرج</option>
                                     <option>ارومیه</option>
                                     <option>بوشهر</option>
                                     <option>تهران</option>
                                     <option>شیراز</option>
                                     <option>کرمان</option>
                                     <option> بندرعباس</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                <label class="pb-1">
                                محصولات مورد نیاز
                                </label>
                                    <div class="input-group">
                                    <textarea class="form-control" name="need_product" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                </div>
                                <!-- Password -->
                                <div class="form-group">
                                    <!-- Label -->
                                    <label class="pb-1">
                                        رمز عبور
                                    </label>
                                    <!-- Input group -->
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-lock color-primary"></span>
                                        </div>
                                        <input type="password" name="password" class="form-control"
                                               placeholder="رمز ورود خود را وارد کنید">
                                    </div>
                                </div>

                                <!-- <div class="my-4">
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="check-terms">
                                        <label class="custom-control-label" for="check-terms">من با <a href="#">قوانین موافقم</a></label>
                                    </div>
                                </div> -->

                                <!-- Submit -->
                                <?php 
                                    if (isset($_POST["register"]) && !empty($errors)) {
                                        foreach ($errors as $err) {
                                            echo "<div class='alert alert-danger' role='alert'>";
                                                echo "{$err}";
                                            echo "</div>";
                                        }
                                    }
                                ?>
                                <button name="register" class="btn btn-lg btn-block solid-btn border-radius mt-4 mb-3">
                                    ثبت نام
                                </button>
                            </form>

                        </div>
                        <div class="card-footer px-md-5 bg-transparent border-top"><small>قبلاً حساب دارید؟</small>
                            <a href="/users/login" class="small">ورود</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-img-absolute">
            <img src="img/wave-shap.svg" alt="wave shape" class="img-fluid">
        </div>
    </section>
    <!--hero section end-->


</div>
<!--body content wrap end-->


<!--jQuery-->
<script src="/js/jquery-3.5.0.min.js"></script>
<!--Popper js-->
<script src="/js/popper.min.js"></script>
<!--Bootstrap js-->
<script src="/js/bootstrap.min.js"></script>
<!--Magnific popup js-->
<script src="/js/jquery.magnific-popup.min.js"></script>
<!--jquery easing js-->
<script src="/js/jquery.easing.min.js"></script>
<!--jquery ytplayer js
<script src="js/jquery.mb.YTPlayer.min.js"></script>-->
<!--wow js-->
<script src="/js/wow.min.js"></script>
<!--owl carousel js-->
<script src="/js/owl.carousel.min.js"></script>
<!--countdown js-->
<script src="/js/jquery.countdown.min.js"></script>
<!--custom js-->
<script src="/js/scripts.js"></script>
</body>

<!-- Mirrored from appco.themetags.com/rtl/basic-sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Jan 2021 07:50:58 GMT -->
</html>