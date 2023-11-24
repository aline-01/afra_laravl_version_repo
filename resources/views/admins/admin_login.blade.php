<?php include("includes/functions.php"); ?>
<?php include("includes/layouts/header.blade.php"); ?>
<?php 
use App\Models\Ausers;

// if (isset($_SESSION["user_registred"])) {
//     $this_user = $functions->get_user_by_id($_SESSION["user_registred"][0]);
//     $this_user_info = [$this_user[0]["mobile_number"],$_SESSION["user_registred"][1]];
// }else {
// }
        $this_user_info = [null,null];

if (isset($_POST["submit"])) {
    $errors = [];
    
    $number = $_POST["number"];
    if (empty($number)) {
        array_push($errors,"enter your username");
    }

    $password = $_POST["password"];
    if (empty($password)) {
        array_push($errors,"رمز عبور خود را وارد کنید");
    }else {
        $hashed_password = $functions->hash_pass($password);
    }
    
    if (empty($errors)) {
        $user = DB::table("admins")->where("username",$number)->where("password",$hashed_password)->get();
        $last_login = $functions->get_date();
        if ($user->Count() > 0) {
            Cookie::queue(Cookie::make("admin_access",$user[0]->id,300*10));
            $functions->header_to_js("/admin/panel");
        }else {
            array_push($errors,"حساب کاربری پیدا نشد");
        }
    }

}

?>
<!--body content wrap start-->
<div class="main">

    <!--hero section start-->
    <section class="hero-section ptb-100 background-img full-screen"
             style="background: url('img/hero-bg-1.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row align-items-center justify-content-between pt-5 pt-sm-5 pt-md-5 pt-lg-0">
                <div class="col-md-7 col-lg-6">
                    <div class="hero-content-left text-white">
                        <h1 class="text-white">منطقه مدیریت</h1>
                        <!-- <p class="lead">
                            صورت خود را همیشه به سمت آفتاب نگه دارید - و سایه ها پشت سر شما قرار می گیرند.
                        </p> -->
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="card login-signup-card shadow-lg mb-0">
                        <div class="card-body px-md-5 py-5">
                            <div class="mb-5">
                                <h5 class="h3">ورود</h5>
                                <p class="text-muted mb-0">برای ادامه وارد حساب خود شوید.</p>
                            </div>

                            <!--login form-->
                            <form class="login-signup-form" action="/admin/login" method="POST">
                            @csrf    
                            <div class="form-group">
                                    <label class="pb-1">نام کاربری</label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-email color-primary"></span>
                                        </div>
                                        <input type="text" name="number" class="form-control" value="<?php echo $this_user_info[0]; ?>" placeholder="نام کاربری:">
                                    </div>
                                </div>
                                <!-- Password -->
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label class="pb-1">رمز عبور</label>
                                        </div>
                                        <div class="col-auto">
                                            <a href="password-reset.html" class="form-text small text-muted">
                                                فراموشی رمز؟
                                            </a>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-lock color-primary"></span>
                                        </div>
                                        <input type="password" name="password" value="<?php echo $this_user_info[1]; ?>" class="form-control" placeholder="رمز ورود خود را وارد کنید">
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
                                    ورود
                                </button>

                            </form>
                        </div>
                        <div class="card-footer bg-transparent border-top px-md-5"><small>ثبت نام نکرده اید؟</small>
                            <a href="/users/sign_up" class="small"> ایجاد حساب</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-img-absolute">
            <img src="img/hero-bg-shape-1.svg" alt="wave shape" class="img-fluid">
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
<script src="js/owl.carousel.min.js"></script>
<!--countdown js-->
<script src="js/jquery.countdown.min.js"></script>
<!--custom js-->
<script src="js/scripts.js"></script>
</body>

<!-- Mirrored from appco.themetags.com/rtl/basic-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Jan 2021 07:50:58 GMT -->
</html>