<?php include("includes/layouts/header.blade.php"); ?>
<?php include("includes/functions.php"); ?>

<?php 

// if (empty($_GET["id"]) == true || isset($_GET["id"]) == false) {
//     $functions->header_to_js("404.php");
// }else {
//     $id = $functions->safe_input($_GET["id"]);
//     $this_blog = $functions->get_blog_by_id($id);
//     $last_blogs = $functions->get_last_rows(3,"blog");
//     $comments = $functions->get_comments_for_blog($id);
//     if (empty($this_blog))   {
//         $functions->header_to_js("404.php");
//     }
// }

if (isset($_POST["submit_comment"])) {
    $errors = array();
    $name = $_POST["comment_name"];
    if (empty($name)) {
        array_push($errors,"نام را وارد کنید");
    }else if (strlen($name) > 180) {
        array_push($errors,"نام خیلی طولانی است");
    } 

    $email = $_POST["comment_email"];
    if (empty($email)) {
        $email = "not_set";
    }
    
    $text = $_POST["comment_text"];
    if (empty($text)) {
        array_push($errors,"متن نظر را وارد کنید");
    }
    
    $now = $functions->get_date();

    if (empty($errors)) {
        DB::table("comments")->insert([
            "name"=>$name,
            "email"=>$email,
            "text"=>$text,
            "blog_id"=>$this_blog->id,
            "send_date"=>$now,
        ]);
        $functions->show_alert("نطر شما بعد از برسی در سایت قرار میگیرد");
        $functions->header_to("/blog/Blog/{$this_blog->id}");
    }
    

}

?>

<!--body content wrap start-->
<div class="main">
    
    <!--header section start-->
    <section class="hero-section ptb-100 background-img"
             style="background: url('img/hero-bg-2.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0">وبلاگ</h1>
                        <!-- <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="#">خانه</a></li>
                                <li class="list-inline-item breadcrumb-item"><a href="#">وبلاگ</a></li>
                                <li class="list-inline-item breadcrumb-item active">سایدبار چپ</li>
                            </ol>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--header section end-->

    <!--blog section start-->
    <div class="module ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <!-- Post-->
                    <article class="post">
                        <div class="post-preview"><img src="/<?php echo $this_blog->picture; ?>" alt="article" style="wiget:100px;height:520px;" class="img-fluid"/></div>
                        <div class="post-wrapper">
                            <div class="post-header">
                                <h1 class="post-title"><?php echo $this_blog->title; ?></h1>
                                <ul class="post-meta">
                                    <li style="padding-top:10px;"><h5><?php echo $this_blog->send_time; ?></h5></li>
                                    <!-- <li>در <a href="#">برند</a>, <a href="#">طراحی</a></li> -->
                                    <!-- <li><a href="#">3 نظر</a></li> -->
                                </ul>
                            </div>
                            <div class="post-content">
                                <?php echo $this_blog->content ?>  
                            <!-- <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد..</p>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                                <blockquote class="blockquote">
                                    <p>بزرگترین دستاورد داشتن خود در دنیایی که دائماً در تلاش است تا شما را به چیز دیگری تبدیل کند.</p>
                                    <footer class="blockquote-footer">آماندا پولاک ، شرکت گوگل</footer>
                                </blockquote>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                                <ol>
                                    <li>استراتژی دیجیتال</li>
                                    <li>توسعه نرم افزار</li>
                                    <li>طراحی تعامل</li>
                                </ol>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                            </div> -->
                            
                        <?php if ($this_blog->category != "not_set") { ?> 
                        <?php $splited_category = explode(" ",$this_blog->category); ?> 
                            <div class="post-footer">
                                <div class="post-tags">
                                <?php foreach($splited_category as $category) {
                                    if ($category == "") { 
                                        continue;
                                    }
                                    echo "<a href='#'>{$category}</a>"; 
                                } ?>
                                </div>
                            </div>
                        <?php } ?>
                        </div>
                    </article>
                    <!-- Post end-->

                    <!-- Comments area-->
                    <div class="comments-area mb-5">
                        <h5 class="comments-title"><?php echo "4";//$functions->get_sum_of_comments($id); ?> نظر</h5>
                        <div class="comment-list">
                            <!-- Comment-->
                            <div class="comment">
                                <?php foreach($comments as $comment) { ?>
                                    <div class="comment-author"><img class="avatar img-fluid rounded-circle" src="/img/comment_default_pic.jpg" alt="comment"/></div>
                                    <div class="comment-body">
                                    <div class="comment-meta">
                                        <div class="comment-meta-author"><a href="#"><?php echo $comment->name; ?></a></div>
                                        <!-- <div class="comment-meta-date"><a href="#">May 5, 2015 at 4:51 am</a></div> -->
                                    </div>
                                    <div class="comment-content">
                                        <p><?Php echo $comment->text; ?></p>
                                    </div>
                                    <div class="comment-reply"><a href="#">پاسخ</a></div>
                                </div>
                                <?php } ?>
                                
                                <!-- <div class="children">
                                    <div class="comment">
                                        <div class="comment-author"><img class="avatar img-fluid rounded-circle" src="img/client-3.jpg" alt="comment"/></div>
                                        <div class="comment-body">
                                            <div class="comment-meta">
                                                <div class="comment-meta-author"><a href="#">امین</a></div>
                                                <div class="comment-meta-date"><a href="#">May 5, 2015 at 4:51 am</a></div>
                                            </div>
                                            <div class="comment-content">
                                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                                            </div>
                                            <div class="comment-reply"><a href="#">پاسخ</a></div>
                                        </div>
                                    </div>
                                </div> -->
                                    <!-- Subcomment-->
                            </div>
                            <!-- Comment-->
                          <div class="comment-respond">
                            <h5 class="comment-reply-title">ارسال نظر</h5>
                            <p class="comment-notes">آدرس ایمیل شما منتشر نخواهد شد. قسمتهای مورد نیاز علامت گذاری شده اند</p>
                            <form action="/blog/Blog/<?php echo $this_blog->id; ?>" method="POST" class="comment-form row">
                                @csrf
                            <div class="form-group col-md-4">
                                    <input class="form-control" name="comment_name" type="text" placeholder="نام">
                                </div>
                                <div class="form-group col-md-4">
                                    <input class="form-control" name="comment_email" type="text" placeholder="ایمیل">
                                </div>
                                <!-- <div class="form-group col-md-4">
                                    <input class="form-control" type="url" placeholder="وبسایت">
                                </div> -->
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" name="comment_text" rows="8" placeholder="نظر"></textarea>
                                </div>
                                <div class="form-submit col-md-12">
                                    <button name="submit_comment" class="btn solid-btn" type="submit">ارسال نظر</button>
                                </div>
                            </form>
                        </div>
                    </div>
</div>
                    <!-- Comments area end-->
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="sidebar-right pl-4">

                        <!-- Search widget-->
                        <aside class="widget widget-search">
                            <form>
                                <input class="form-control" type="search" placeholder="جستجو">
                                <button class="search-button" type="submit"><span class="ti-search"></span></button>
                            </form>
                        </aside>


                        <!-- Categories widget-->
                        <!-- you need to write this alien but not now ---------------------------- -->
                        <!-- <aside class="widget widget-categories">
                            <div class="widget-title">
                                <h6>دسته بندی</h6>
                            </div>
                            <ul>
                                <li><a href="#">سفر <span class="float-right">112</span></a></li>
                                <li><a href="#">توسعه<span class="float-right">86</span></a></li>
                                <li><a href="#">ورزش<span class="float-right">10</span></a></li>
                                <li><a href="#">عکاسی<span class="float-right">144</span></a></li>
                                <li><a href="#">علم<span class="float-right">18</span></a></li>
                            </ul>
                        </aside> -->

                        <!-- Recent entries widget-->
                        <aside class="widget widget-recent-entries-custom">
                            <div class="widget-title">
                                <h6>آخرین اخبار</h6>
                            </div>
                            <ul>
                        <?php foreach($last_blogs as $l_blog) { ?> 
                            <li class="clearfix">
                                    <div class="wi"><a href="#"><img src="/<?php echo $l_blog->picture ?>" alt="recent post" class="img-fluid rounded"/></a></div>
                                    <div class="wb"><a href="#"><?php echo $l_blog->title; ?></a><span class="post-date"><?php //echo $l_blog["date_send"] ?></span></div>
                                </li>
                            </ul>
                        <?php } ?>
                        </aside>

                        <!-- Subscribe widget-->
                        <aside class="widget widget-categories">
                            <div class="widget-title">
                                <h6>خبرنامه</h6>
                            </div>
                            <p>برای عضویت در خبرنامه من آدرس ایمیل خود را در زیر وارد کنید</p>
                            <form action="#" method="post"
                                  class="d-none d-md-block d-lg-block">
                                <input type="text" class="form-control input" id="email-footer" name="email"
                                       placeholder="info@yourdomain.com">
                                <button type="submit" class="btn solid-btn btn-block btn-not-rounded mt-3">اشتراک</button>
                            </form>
                        </aside>

                        <!-- Tags widget-->
                        <!-- <aside class="widget widget-tag-cloud">
                            <div class="widget-title">
                                <h6>برچسب ها</h6>
                            </div>
                            <div class="tag-cloud"><a href="#">ووکامرس</a><a href="#">نمونه کار</a><a href="#">رسپانسیو</a><a href="#">بوت</a><a href="#">شرکت</a><a href="#">جدول</a></div>
                        </aside> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--blog section end-->

</div>
<!--body content wrap end-->
<?php include("includes/layouts/footer.blade.php"); ?>