<?php include("includes/layouts/header.blade.php"); ?>
<?php include("includes/functions.php"); ?>
<?php 

// $all_blogs = $functions->get_all_blogs();

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
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <!-- <li class="list-inline-item breadcrumb-item"><a href="#">خانه</a></li> -->
                                <!-- <li class="list-inline-item breadcrumb-item"><a href="#">وبلاگ</a></li> -->
                                <!-- <li class="list-inline-item breadcrumb-item active">پیش فرض وبلاگ</li> -->
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--header section end-->

    <!--blog section start-->
    <section class="our-blog-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="section-heading mb-5">
                        <h2>آخرین اخبار</h2>
                        <p>
                            قبل از ظهور رهبری با شور و شوق فرصتهای انقلابی را هدایت کنید متمایز
                             تبدیل روشهای تاکتیکی توانمندسازی از طریق هسته مکیدن منابع.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php foreach($all_blogs as $blog) { ?>
                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <!-- <span class="category position-absolute badge badge-pill badge-primary">سبک زندگی</span> -->
                        <img src="/<?php echo $blog->picture; ?>" width="300px" height="300px" class="card-img-top position-relative" alt="blog">
                        <div class="card-body">
                            <div class="post-meta mb-2">
                                <ul class="list-inline meta-list">
                                    <li class="list-inline-item"><?php //echo $blog->date_send; ?></li>
                                    <!-- <li class="list-inline-item"><span>45</span> نظر</li>
                                    <li class="list-inline-item"><span>10</span> اشتراک</li> -->
                                </ul>
                            </div>
                            <h3 class="h5 card-title"><a href="#"><?php echo $blog->title;?></a></h3>
                            <!-- <p class="card-text">چند متن مثال سریع برای ایجاد عنوان کارت و قسمت عمده آن.</p> -->
                            <a href="/blog/Blog/<?php echo $blog->id; ?>" class="detail-link">ادامه مطلب <span class="ti-arrow-left"></span></a>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!-- <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <span class="category position-absolute badge badge-pill badge-danger">فناوری</span>
                        <img src="img/blog/2.jpg" class="card-img-top position-relative" alt="blog">
                        <div class="card-body">
                            <div class="post-meta mb-2">
                                <ul class="list-inline meta-list">
                                    <li class="list-inline-item">دی 26, 2019</li>
                                    <li class="list-inline-item"><span>30</span> نظر</li>
                                    <li class="list-inline-item"><span>5</span> اشتراک</li>
                                </ul>
                            </div>
                            <h3 class="h5 card-title"><a href="#">به سرعت باطن را فرموله کنید</a></h3>
                            <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                            <a href="#" class="detail-link">ادامه مطلب <span class="ti-arrow-left"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <span class="category position-absolute badge badge-pill badge-info">علم</span>
                        <img src="img/blog/3.jpg" class="card-img-top" alt="blog">
                        <div class="card-body">
                            <div class="post-meta mb-2">
                                <ul class="list-inline meta-list">
                                    <li class="list-inline-item">دی 25, 2019</li>
                                    <li class="list-inline-item"><span>41</span> نظر</li>
                                    <li class="list-inline-item"><span>30</span> اشتراک</li>
                                </ul>
                            </div>
                            <h3 class="h5 card-title"><a href="#">گسترش عینی گسترده</a></h3>
                            <p class="card-text">با نگاهی کلی به رهبری کاربران منبع آزاد بپردازید تا کاربران فعال. </p>
                            <a href="#" class="detail-link">ادامه مطلب <span class="ti-arrow-left"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <span class="category position-absolute badge badge-pill badge-primary">سبک  زندگی</span>
                        <img src="img/blog/4.jpg" class="card-img-top position-relative" alt="blog">
                        <div class="card-body">
                            <div class="post-meta mb-2">
                                <ul class="list-inline meta-list">
                                    <li class="list-inline-item">دی 21, 1400</li>
                                    <li class="list-inline-item"><span>45</span> نظر</li>
                                    <li class="list-inline-item"><span>10</span> اشتراک</li>
                                </ul>
                            </div>
                            <h3 class="h5 card-title"><a href="#">بطور مناسب مهندسی مجدد بالا </a></h3>
                            <p class="card-text">چند متن مثال سریع برای ایجاد عنوان کارت و قسمت عمده آن.</p>
                            <a href="#" class="detail-link">ادامه مطلب <span class="ti-arrow-left"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"> -->
                    <!-- <div class="single-blog-card card border-0 shadow-sm">
                        <span class="category position-absolute badge badge-pill badge-danger">فناوری</span>
                        <img src="img/blog/5.jpg" class="card-img-top position-relative" alt="blog">
                        <div class="card-body">
                            <div class="post-meta mb-2">
                                <ul class="list-inline meta-list">
                                    <li class="list-inline-item">May 26, 2019</li>
                                    <li class="list-inline-item"><span>30</span> نظر</li>
                                    <li class="list-inline-item"><span>5</span> اشتراک</li>
                                </ul>
                            </div>
                            <h3 class="h5 card-title"><a href="#">بصورت تدریجی تجسم فعال است</a></h3>
                            <p class="card-text">سینرژیک درگیر ROI موثر پس از مشتری مشارکت کارگردانی.</p>
                            <a href="#" class="detail-link">ادامه مطلب <span class="ti-arrow-left"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <span class="category position-absolute badge badge-pill badge-info">علم</span>
                        <img src="img/blog/6.jpg" class="card-img-top" alt="blog">
                        <div class="card-body">
                            <div class="post-meta mb-2">
                                <ul class="list-inline meta-list">
                                    <li class="list-inline-item">Apr 25, 2019</li>
                                    <li class="list-inline-item"><span>41</span> نظر</li>
                                    <li class="list-inline-item"><span>30</span> اشتراک</li>
                                </ul>
                            </div>
                            <h3 class="h5 card-title"><a href="#">قابل اعتماد کاربران را پیاده سازی کنید</a></h3>
                            <p class="card-text">با نگاهی کلی به رهبری کاربران منبع آزاد بپردازید تا کاربران فعال.</p>
                            <a href="#" class="detail-link">ادامه مطلب <span class="ti-arrow-left"></span></a>
                        </div>
                    </div>
                </div>-->
            </div>

            <!--pagination start-->
            <div class="row">
                <div class="col-md-12">
                    <nav class="custom-pagination-nav mt-4">
                        <ul class="pagination justify-content-center">
                            <li class="page-item"><a class="page-link" href="#"><span class="ti-angle-right"></span></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#"><span class="ti-angle-left"></span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--pagination end-->

        </div>
    </section>
    <!--blog section end-->

</div>
<!--body content wrap end-->

<!--footer section start-->
<?php include("includes/layouts/footer.blade.php"); ?>