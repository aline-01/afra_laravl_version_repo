<?php include("includes/layouts/header.blade.php"); ?>
<?php include("includes/functions.php"); ?>
<?php 

?>
<style>

a {
text-decoration: none;
}

.pricingTable {
text-align: center;
background: #fff;
margin: 10px 0px;
box-shadow: 0 0 10px #ababab;
padding-bottom: 40px;
border-radius: 10px;
color: #cad0de;
transform: scale(1);
transition: all .5s ease 0s
}

.pricingTable:hover {
transform: scale(1.05);
z-index: 1
}

.pricingTable .pricingTable-header {
padding: 40px 0;
/* background: #f5f6f9; */
/* border-radius: 10px 10px 50% 50%; */
transition: all .5s ease 0s

}

/* .pricingTable:hover .pricingTable-header {
background: #ff9624
} */

.pricingTable .pricingTable-header i {
font-size: 50px;
color: #858c9a;
margin-bottom: 10px;
transition: all .5s ease 0s
}

.pricingTable .price-value {
font-size: 35px;
color: #ff9624;
transition: all .5s ease 0s
}

.pricingTable .month {
display: block;
font-size: 14px;
color: #cad0de
}

.pricingTable:hover .month,
.pricingTable:hover .price-value,
.pricingTable:hover .pricingTable-header i {
color: #fff
}

.pricingTable .heading {
font-size: 24px;
color: #ff9624;
margin-bottom: 20px;
text-transform: uppercase
}

.pricingTable .pricing-content ul {
list-style: none;
padding: 0;
margin-bottom: 30px
}

.pricingTable .pricing-content ul li {
line-height: 30px;
color: #a7a8aa
}

.pricingTable .pricingTable-signup a {
display: inline-block;
font-size: 15px;
color: #fff;
padding: 10px 35px;
border-radius: 20px;
background: #ffa442;
text-transform: uppercase;
transition: all .3s ease 0s
}

.pricingTable .pricingTable-signup a:hover {
box-shadow: 0 0 10px #ffa442
}

.pricingTable.blue .heading,
.pricingTable.blue .price-value {
color: #4b64ff
}

.pricingTable.blue .pricingTable-signup a,
.pricingTable.blue:hover .pricingTable-header {
background: #4b64ff
}

.pricingTable.blue .pricingTable-signup a:hover {
box-shadow: 0 0 10px #4b64ff
}

.pricingTable.red .heading,
.pricingTable.red .price-value {
color: #ff4b4b
}

.pricingTable.red .pricingTable-signup a,
.pricingTable.red:hover .pricingTable-header {
background: #ff4b4b
}

.pricingTable.red .pricingTable-signup a:hover {
box-shadow: 0 0 10px #ff4b4b
}

.pricingTable.green .heading,
.pricingTable.green .price-value {
color: #40c952
}

.pricingTable.green .pricingTable-signup a,
.pricingTable.green:hover .pricingTable-header {
background: #40c952
}

.pricingTable.green .pricingTable-signup a:hover {
box-shadow: 0 0 10px #40c952
}

.pricingTable.blue:hover .price-value,
.pricingTable.green:hover .price-value,
.pricingTable.red:hover .price-value {
color: #fff
}

@media screen and (max-width:990px) {
.pricingTable {
margin: 0 0 20px
}

}

.price_table td {
    color:black;
}
.price_table th {
    color:black;
}

</style>
<!--body content wrap start-->
<div class="main">

    <!--hero section start-->
    <section class="hero-section hero-section-2 ptb-100">
        <div class="circles">
            <div class="point animated-point-1"></div>
            <div class="point animated-point-2"></div>
            <div class="point animated-point-3"></div>
            <div class="point animated-point-4"></div>
            <div class="point animated-point-5"></div>
            <div class="point animated-point-6"></div>
            <div class="point animated-point-7"></div>
            <div class="point animated-point-8"></div>
            <div class="point animated-point-9"></div>
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 col-lg-6">
                    <div class="hero-content-left ptb-100 text-white">
                        <h1 class="text-white"><span>افرا تجرات غدیر</span> </h1>
                        <p class="lead">تهیه کننده انواع لوله و اتصالات اهنی</p>

                        <a href="#" class="btn app-store-btn">تماس با ما</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="hero-animation-img">
                        <img class="img-fluid d-block animation-one" src="img/hero-animation-04.svg"
                             alt="animation image">
                        <img class="img-fluid d-none d-lg-block animation-two"
                             src="img/hero-animation-01.svg" alt="animation image" width="120">
                        <img class="img-fluid d-none d-lg-block animation-three"
                             src="img/hero-animation-02.svg" alt="animation image" width="120">
                        <img class="img-fluid d-none d-lg-block animation-four" src="img/hero-animation-03.svg"
                             alt="animation image" width="230">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->

    <!--promo section start-->
    <!-- <section class="promo-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8">
                    <div class="section-heading text-center mb-5">
                        <h2>چرا مشتریان <br><span> افرا تجارت غدیر رو دوست دارند</span></h2>
                        <p class="lead"> 
                        </p>
                    </div>
                </div>
            </div>
            <div class="row equal">
                <div class="col-md-4 col-lg-4">
                    <div class="single-promo single-promo-hover single-promo-1 rounded text-center white-bg p-5 h-100">
                        <div class="circle-icon mb-5">
                            <span class="ti-vector text-white"></span>
                        </div>
                        <h5>تیم جوان و پویا</h5>
                        <p>با نشان دادن پویایی واقعی وب سایت خود ، فروش خود را افزایش دهید.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="single-promo single-promo-hover single-promo-1 rounded text-center white-bg p-5 h-100">
                        <div class="circle-icon mb-5">
                            <span class="ti-lock text-white"></span>
                        </div>
                        <h5>قیمت رقابتی </h5>
                        <p>ایجاد اعتماد فروشگاه آنلاین خود را با استفاده از اثبات اجتماعی و ضرورت.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="single-promo single-promo-hover single-promo-1 rounded text-center white-bg p-5 h-100">
                        <div class="circle-icon mb-5">
                            <span class="ti-eye text-white"></span>
                        </div>
                        <h5>حذف واسطه ها</h5>
                        <p>به اهمیت اثبات اجتماعی در تصمیم خرید مشتری پی ببرید.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--promo section end-->

    <!--about us section start-->
    <!-- <section id="about" class="about-us ptb-100 gray-light-bg">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-7">
                    <div class="about-content-left section-heading">
                        <h2>از دستگاه android یا ios خود استفاده کنید <br>
                            <span>برای مدیریت همه چیز</span></h2>

                        <div class="single-feature mb-4">
                            <div class="icon-box-wrap d-flex align-items-center mb-2">
                                <div class="mr-3 icon-box">
                                    <img src="img/image-icon-1.png" alt="icon image" class="img-fluid">
                                </div>
                                <p class="mb-0">فعالانه بازارهای الکترونیکی منبع آزاد را پس از بازده کم با ریسک بالا ، سندیکا کنید
                                    هم افزایی حرفه ای
                                    فناوری بینشی را ساده کنید.</p>
                            </div>
                        </div>
                        <div class="single-feature mb-4">
                            <div class="icon-box-wrap mb-2">
                                <div class="mr-3 icon-box">
                                    <img src="img/image-icon-2.png" alt="icon image" class="img-fluid">
                                </div>
                                <p class="mb-0">منابع داخلی و یا "ارگانیک" از طریق محصولات تولید شده در همه گیر ، ذاتی است. هم افزایی</p>
                            </div>
                            <p></p>
                        </div>
                        <div class="single-feature mb-4">
                            <div class="icon-box-wrap mb-2">
                                <div class="mr-3 icon-box">
                                    <img src="img/image-icon-3.png" alt="icon image" class="img-fluid">
                                </div>
                                <p class="mb-0">پس از تجارب گسترده ، e-tailer های قدرتمند را کاملاً اداره کنید. جامع از شبکه های با کیفیت موجود استفاده کنید.</p>
                            </div>
                            <p></p>
                        </div>
                        <div class="single-feature mb-4">
                            <div class="icon-box-wrap mb-2">
                                <div class="mr-3 icon-box">
                                    <img src="img/image-icon-4.png" alt="icon image" class="img-fluid">
                                </div>
                                <p class="mb-0">معیارهای عملکردی شده را ذاتیاً تشویق می کنید در حالی که شبکه ها رو به جلو هستند. با همکاری همکار کلیک روشن و خمپاره انداز را ساخت.</p>
                            </div>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="about-content-right">
                        <img src="img/image-14.png" alt="about us" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--about us section end-->

    <!--features section start-->
    <!-- <section id="features" class="feature-section ptb-100">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-4">
                    <div class="download-img">
                        <img src="img/image-10.png" alt="download" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="feature-contents section-heading">
                        <h2>روند سریع و آسان با<br>
                            <span>بهترین ویژگی ها</span></h2>
                        <p>ارزش عینی را با آمادگی وب متنوع ارائه دهید.
                             انتقال مشترک خدمات مشتری بی سیم بدون کاتالیزورهای هدف گرا برای
                             تغییر دادن. با همکاری</p>

                        <div class="feature-content-wrap">
                            <ul class="nav nav-tabs feature-tab" data-tabs="tabs">
                                <li class="nav-item">
                                    <a class="nav-link active h6" href="#tab6-1" data-toggle="tab">
                                        <span class="ti-palette"></span>
                                        طراحی
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link h6" href="#tab6-2" data-toggle="tab">
                                        <span class="ti-vector"></span>
                                        توسعه
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link h6" href="#tab6-3" data-toggle="tab">
                                        <span class="ti-bar-chart"></span>
                                        بازاریابی
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link h6" href="#tab6-4" data-toggle="tab">
                                        <span class="ti-announcement"></span>
                                        برندیگ
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content feature-tab-content">
                                <div class="tab-pane active" id="tab6-1">
                                    <ul class="list-unstyled">
                                        <li class="py-2">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <div class="badge badge-circle badge-primary mr-3">
                                                        <span class="ti-check"></span>
                                                    </div>
                                                </div>
                                                <div><p class="mb-0">امکانات زیاد</p></div>
                                            </div>
                                        </li>
                                        <li class="py-2">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <div class="badge badge-circle badge-primary mr-3">
                                                        <span class="ti-check"></span>
                                                    </div>
                                                </div>
                                                <div><p class="mb-0">پوست خود را متناسب با نام تجاری خود ایجاد کنید</p></div>
                                            </div>
                                        </li>
                                        <li class="py-2">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <div class="badge badge-circle badge-primary mr-3">
                                                        <span class="ti-check"></span>
                                                    </div>
                                                </div>
                                                <div><p class="mb-0">در سطح جهان کانالهای تاکتیکی را ارکستر کنید در حالی که آجرها</p></div>
                                            </div>
                                        </li>
                                        <li class="py-2">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <div class="badge badge-circle badge-primary mr-3">
                                                        <span class="ti-check"></span>
                                                    </div>
                                                </div>
                                                <div><p class="mb-0">برای تهیه کلیه دارایی ها برای تولید از Gulp استفاده کنید</p></div>
                                            </div>
                                        </li>
                                        <li class="py-2">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <div class="badge badge-circle badge-primary mr-3">
                                                        <span class="ti-check"></span>
                                                    </div>
                                                </div>
                                                <div><p class="mb-0">به طور مشترک غالب تولید عمودی است</p></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane" id="tab6-2">
                                    <div class="single-feature">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="ti-microphone rounded mr-3 icon icon-color-1"></span>
                                            <h5 class="mb-0">آسان برای استفاده</h5>
                                        </div>
                                        <p>Sارتباطات نسل بعدی را از نظر نیروگاه ارائه می دهیم در حالی که منابع لبه خونریزی می کنند. به طور مداوم منفعت مستقل را منفعت می کنیم در حالی که.</p>
                                    </div>
                                    <div class="single-feature mb-4">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="ti-alarm-clock rounded mr-3 icon icon-color-2"></span>
                                            <h5 class="mb-0">تبدیل را افزایش دهید</h5>
                                        </div>
                                        <p>فسفلورسنت به سرمایه فکری جذاب و خدمات وب انقلابی قدرت می بخشد. توسعه متقابل رسانه های متقابل.</p>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab6-3">
                                    <div class="row">
                                        <div class="col single-feature mb-4">
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="ti-bar-chart rounded mr-3 icon icon-color-2"></span>
                                                <h5 class="mb-0">تبدیل را افزایش دهید</h5>
                                            </div>
                                            <p>نمایش تبدیل های اخیر ، ایجاد اعتبار و اعتماد.</p>
                                        </div>
                                        <div class="col single-feature mb-4">
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="ti-stats-up rounded mr-3 icon icon-color-3"></span>
                                                <h5 class="mb-0">تجزیه و تحلیل محصول</h5>
                                            </div>
                                            <p>نوار تبلیغاتی برتر که تا چند تخفیف شمارش معکوس دارد.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab6-4">
                                    <p>من باید فشار بیاورم ، نشان دهم
                                         مردم ، این سطحی است که همه چیز می تواند در آن باشد. بنابراین وقتی چیزی بدست می آورید
                                         که نام Kanye West روی آن است ، قرار است بیشترین فشار را داشته باشد
                                         ممکن ها. من رهبر شرکتی خواهم بود که سرانجام ارزشمند خواهد بود
                                         میلیاردها دلار ، چون جوابها را گرفتم. من فرهنگ را می فهمم. من هستم
                                         هسته.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--features section end-->

    <!--our video promo section start-->
    <!-- <section class="video-promo ptb-100 background-img"
             style="background: url('img/hero-bg-1.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="video-promo-content mt-4 text-center">
                        <a href="https://www.youtube.com/watch?v=9No-FiEInLA"
                           class="popup-youtube video-play-icon d-inline-block"><span class="ti-control-play"></span></a>
                        <h5 class="mt-4 text-white">مشاهده ویدئو</h5>

                        <div class="download-btn mt-5">
                            <a href="#" class="btn google-play-btn mr-3"><span class="ti-android"></span> گوگل
                                پلی</a>
                            <a href="#" class="btn app-store-btn"><span class="ti-apple"></span> اپ استور</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </section>
    <!--our video promo section end-->

    <!--our pricing packages section start-->
    <section id="pricing" class="package-section gray-light-bg ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center mb-5">
                        <!-- <span class="badge badge-primary badge-pill">بسته قیمت گذاری ما</span> -->
                        <h2>قیمت ها<br><span>بهترین را انتخاب کنید</span></h2>
                        <p class="lead">
                            یکنواختی رشد فرآیند استراتژیک را نسبت به منابع یکپارچه رشد می دهد.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
            <?php $all_prices = DB::table("price_product_category")->take(6)->get(); ?>    
            <?php foreach($all_prices as $price) { ?>
            <?php $price_list = DB::table("price_product_proc")->where("category_id",$price->id)->get();?>
            <div class="col-md-4 col-sm-8">
            <div class="pricingTable blue">
                <div class="pricingTable-header" style="border-radius:0;background-image:url(<?php echo $price->picture; ?>);  background-size: 100% 100%;">
                <div class="price-value"> $30.00 <span class="month">per month</span> </div>
                </div>
                <h3 class="heading"><?php echo $price->name ?></h3>
                <div class="pricing-content">
            <table class="table price_table">
            <thead>
          <tr>
            <th scope="col">نام محصول</th>
            <th scope="col">نرخ (ریال)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php foreach ($price_list as $list) { ?>
            <td><?php echo $list->name; ?></td>
            <td><?php echo $list->price; ?></td>
          </tr>
          <?php } ?>
          <!-- <tr>
            <td>لوله گالوانیز</td>
              <td>۵۲۵,۶۸۸</td>
          </tr>
          <tr>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr> -->
        </tbody>
      </table>

        </div>
    </div>
</div>
<?php } ?>
        
            </div>
            <!-- faq start-->
            <div class="row pt-5">
                <div class="col-md-6">
                    <div class="single-faq">
                        <h5>چگونه می توانیم اغلام رو خرید کنیم ?</h5>
                        <p>با توجه به بخش اعتبار سنجی اعتبار شرکت و حساب شما سنجیده میشه و طبق اون مرد شما میتواند به صورت نقدی یا عرفی یک الا سه ماهه خریداری کنید</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single-faq">
                        <h5>آیا امکان پرداخت سالانه وجود دارد؟</h5>
                        <p>اقلام با توجه به تعداد درخواستی دارای درصد تخیفف میباشند همچنین برای همکاران تخفیف ویژه ای درنظر خاهد گرفته خاهد شد</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single-faq">
                        <h5>ایا قیمت ها لحظه ای است ? </h5>
                        <p>با توجه به نوسانات بازار اکثر قیمت نیاز به تآیید مجدد نیاز داره</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single-faq">
                        <h5>کنترل کیقیت کالا به صورت هست؟</h5>
                        <p>تمامی اقلام قبل از ارسال توسط  کی شرکت ما برسی و پس از ان برای مشتری ارسال میگردد مشتری تا ۲۴ ساعت محلت دارد تا مشکلات اقلام خریداری شده را اطلاع دهد جهت جایگزینی
                             </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single-faq">
                        <h5> بارگیری و حمل کالا به چه صورت است ؟</h5>
                        <p> پس از ان مشتری میتواند ار بارگیری شرکت یا از بارگیری ما استفاده کند</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single-faq">
                        <h5>صدور فاکتور رسمی ؟</h5>
                        <p>مشتری پس از حمل و تآیید تمامی اغلام فاکتور صادر چاپ و تحویل مشتری میشه</p>
                    </div>
                </div>
            </div>
            <!--faq end-->
        </div>
    </section>
    <!--our pricing packages section end-->

    <!--testimonial section start-->
    <!-- <section class="testimonial-section ptb-100">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6">
                    <div class="section-heading mb-5">
                        <h2>نظرات مشتریان<br><span>در مورد ما</span></h2>
                        <p class="lead">
                            به سرعت منابع داخلی یا "آلی" شفاف را شکل دهید در حالی که مکش منابع است
                             تجارت الکترونیکی به راحتی جذاب داخلی را نوآوری کنید.
                        </p>

                        <div class="client-section-wrap d-flex flex-row align-items-center">
                            <ul class="list-inline">
                                <li class="list-inline-item"><img src="img/client-1-color.png" width="85" alt="client"
                                                                  class="img-fluid"></li>
                                <li class="list-inline-item"><img src="img/client-6-color.png" width="85" alt="client"
                                                                  class="img-fluid"></li>
                                <li class="list-inline-item"><img src="img/client-3-color.png" width="85" alt="client"
                                                                  class="img-fluid"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="owl-carousel owl-theme client-testimonial arrow-indicator">
                        <div class="item">
                            <div class="testimonial-quote-wrap">
                                <div class="media author-info mb-3">
                                    <div class="author-img mr-3">
                                        <img src="img/client-1.jpg" alt="client" class="img-fluid rounded-circle">
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mb-0">جان دی</h5>
                                        <span>گوگل</span>
                                    </div>
                                </div>
                                <div class="client-say">
                                    <p> <img src="img/quote.png" alt="quote" class="img-fluid"> به طور تعاملی تخصص کاملا تحقیق شده را درمقابل روابط پلاگین و بازی بهینه کنید. ذاتاً صلاحیت های اصلی ویروسی را برای خدمات مشتری کاملاً آزمایش شده توسعه دهید. با شور و شوق استراتژی های رشد نسل بعدی را ایجاد کنید و.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-quote-wrap">
                                <div class="media author-info mb-3">
                                    <div class="author-img mr-3">
                                        <img src="img/client-2.jpg" alt="client" class="img-fluid rounded-circle">
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mb-0">امین صفرپور</h5>
                                        <span>ملت وب</span>
                                    </div>
                                </div>
                                <div class="client-say">
                                    <p><img src="img/quote.png" alt="quote" class="img-fluid">  پس از ابتکارات گسترده ، به سرعت استراتژی های رشد کاربر پسند را توسعه دهید. از طریق تحویل های کاملاً تست شده ، به راحتی مزایای ابتکاری را رشد دهید. به سرعت از سیستم عامل های متمرکز از طریق طرح های پایان به پایان استفاده کنید.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-quote-wrap">
                                <div class="media author-info mb-3">
                                    <div class="author-img mr-3">
                                        <img src="img/client-1.jpg" alt="client" class="img-fluid rounded-circle">
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mb-0">جری جر</h5>
                                        <span>تم فارست</span>
                                    </div>
                                </div>
                                <div class="client-say">
                                    <p><img src="img/quote.png" alt="quote" class="img-fluid"> پس از ابتکارات گسترده ، به سرعت استراتژی های رشد کاربر پسند را توسعه دهید. از طریق تحویل های کاملاً تست شده ، به راحتی مزایای ابتکاری را رشد دهید. به سرعت از سیستم عامل های متمرکز از طریق طرح های پایان به پایان استفاده کنید</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-quote-wrap">
                                <div class="media author-info mb-3">
                                    <div class="author-img mr-3">
                                        <img src="img/client-1.jpg" alt="client" class="img-fluid rounded-circle">
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mb-0">جان دی</h5>
                                        <span>گوگل</span>
                                    </div>
                                </div>
                                <div class="client-say">
                                    <p><img src="img/quote.png" alt="quote" class="img-fluid"> با شور و شوق ، داده های B2C را بدون همگرایی کلیک و خمپاره نو می کنید. یکنواختی روشهای تست جذاب را در مقابل روشهای آزمایش B2B ارائه می دهد. در حالی که فرآیندهای جهانی ، منابع یکپارچه را با صلاحیت مصادره می کند. با اشتیاق.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--testimonial section end-->

    <!--screenshots section start-->
    <!-- <section id="screenshots" class="screenshots-section ptb-100 primary-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center">
                        <h2 class="text-white">اسکرین ها<br> <span>عالی</span></h2>
                        <p class="lead">سنتز قابل اعتماد شبکه های مبتنی بر چندرسانه ای در مقابل استراتژی های رشد عالی. به طور مداوم از رابط های موجود در سراسر جهان استفاده کنید </p>
                    </div>
                </div>
            </div> -->
            <!--start app screen carousel-->
            <!-- <div class="screen-slider-content mt-5">
                <div class="screenshot-frame"></div>
                <div class="screen-carousel owl-carousel owl-theme dot-indicator">
                    <img src="img/01.png" class="img-fluid" alt="screenshots">
                    <img src="img/02.png" class="img-fluid" alt="screenshots">
                    <img src="img/03.png" class="img-fluid" alt="screenshots">
                    <img src="img/04.png" class="img-fluid" alt="screenshots">
                    <img src="img/05.png" class="img-fluid" alt="screenshots">
                    <img src="img/06.png" class="img-fluid" alt="screenshots">
                </div>
            </div> -->
            <!--end app screen carousel-->

        <!-- </div>
    </section> -->
    <!--screenshots section end-->

    <!--our team section start-->
    <!-- <section id="team" class="team-member-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8">
                    <div class="section-heading text-center mb-5">
                        <h2>تیم ام</h2>
                        <p class="lead">
                            دلایل زیر مزایای افزودن AppCo به صفحات اصلی ، نسخه های نمایشی و پرداخت ها را نشان می دهد
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-team-member position-relative">
                        <div class="team-image">
                            <img src="img/team-4.jpg" alt="Team Members" class="img-fluid rounded-circle">
                        </div>
                        <div class="team-info text-white rounded-circle d-flex flex-column align-items-center justify-content-center">
                            <h5 class="mb-0">ادنا مانسون</h5>
                            <h6>طراح</h6>
                            <ul class="list-inline team-social social-icon mt-4 text-white">
                                <li class="list-inline-item"><a href="#"><span class="ti-facebook"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="ti-twitter"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="ti-github"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="ti-dribbble"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-team-member position-relative">
                        <div class="team-image">
                            <img src="img/team-1.jpg" alt="Team Members" class="img-fluid rounded-circle">
                        </div>
                        <div class="team-info text-white rounded-circle d-flex flex-column align-items-center justify-content-center">
                            <h5 class="mb-0">ادنا مانسون</h5>
                            <h6>طراح</h6>
                            <ul class="list-inline team-social social-icon mt-4 text-white">
                                <li class="list-inline-item"><a href="#"><span class="ti-facebook"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="ti-twitter"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="ti-github"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="ti-dribbble"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-team-member position-relative">
                        <div class="team-image">
                            <img src="img/team-2.jpg" alt="Team Members" class="img-fluid rounded-circle">
                        </div>
                        <div class="team-info text-white rounded-circle d-flex flex-column align-items-center justify-content-center">
                            <h5 class="mb-0">ادنا مانسون</h5>
                            <h6>طراح</h6>
                            <ul class="list-inline team-social social-icon mt-4 text-white">
                                <li class="list-inline-item"><a href="#"><span class="ti-facebook"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="ti-twitter"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="ti-github"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="ti-dribbble"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-team-member position-relative">
                        <div class="team-image">
                            <img src="img/team-3.jpg" alt="Team Members" class="img-fluid rounded-circle">
                        </div>
                        <div class="team-info text-white rounded-circle d-flex flex-column align-items-center justify-content-center">
                            <h5 class="mb-0">ادنا مانسون</h5>
                            <h6>طراح</h6>
                            <ul class="list-inline team-social social-icon mt-4 text-white">
                                <li class="list-inline-item"><a href="#"><span class="ti-facebook"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="ti-twitter"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="ti-github"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="ti-dribbble"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--our team section end-->

    <!--our blog section start-->
    <section id="blog" class="our-blog-section ptb-100">
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
                <?php //$last_blogs = $functions->get_last_rows(6,"blog"); ?>
                <?php foreach($last_blogs as $l_blog) { ?>
                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <!-- <span class="category position-absolute badge badge-pill badge-primary">سبک زندگی</span> -->
                        <img src="<?php echo $l_blog->picture ?>" width="400px" height="300px" class="card-img-top position-relative" alt="blog">
                        <div class="card-body">
                            <div class="post-meta mb-2">
                                <ul class="list-inline meta-list">
                                    <li class="list-inline-item"><?php echo $l_blog->send_time; ?></li>
                                    <li class="list-inline-item"><span>45</span> نظر</li>
                                    <!--<li class="list-inline-item"><span>10</span> اشتراک</li> -->
                                </ul>
                            </div>
                            <h3 class="h5 card-title"><a href="#"><?Php echo $l_blog->title; ?></a></h3>
                            <!-- <p class="card-text">چند متن مثال سریع برای ایجاد عنوان کارت و قسمت عمده آن.</p> -->
                            <a href="/pages/blog/single_blog.php?id=<?php echo $l_blog->id; ?>" class="detail-link">ادامه مطلب <span class="ti-arrow-left"></span></a>
                        </div>
                    </div>
                 </div>
                <?php } ?>
                
    </section>
    <!--our blog section end-->

    <!--contact us section start-->
    <section id="contact" class="contact-us gray-light-bg ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12 pb-3 message-box d-none">
                    <div class="alert alert-danger"></div>
                </div>
                <div class="col-md-5">
                    <div class="section-heading">
                        <h3>تماس با ما</h3>
                        <p>ارتباط با ما بسیار آسان است. فقط از فرم تماس استفاده کنید یا به ما پرداخت کنید
                             برای یک قهوه در دفتر مراجعه کنید. فناوری رقابتی را پس از an به صورت پویا ابداع کنید
                             مجموعه گسترده ای از رهبری.</p>
                    </div>
                    <div class="footer-address">
                        <h6><strong>دفتر مرکزی</strong></h6>
                        <p>ایران - تبریز</p>
                        <ul>
                            <li><span>تلفن: +61 2 8376 6284</span></li>
                            <li><span>ایمیل: <a href="mailto:hello@yourdomain.com">hello@yourdomain.com</a></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7">
                    <form action="#" method="POST" id="contactForm" class="contact-us-form" novalidate="novalidate">
                        <h5>سریع به ما برسید</h5>
                        <div class="row">
                            <div class="col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="نام شما"
                                            required="required">
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="ایمیل شما"
                                            required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" name="phone" value="" class="form-control" id="phone"
                                            placeholder="تلفن شما">
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" name="company" value="" size="40" class="form-control"
                                            id="company" placeholder="شرکت شما">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" class="form-control" rows="7" cols="25"
                                                placeholder="پیام"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 mt-3">
                                <button type="submit" class="btn solid-btn" id="btnContactUs">
                                    ارسال پیام
                                </button>
                            </div>
                        </div>
                    </form>
                    <p class="form-message"></p>
                </div>
            </div>
        </div>
    </section>
    <!--contact us section end-->

    <!--client section start-->
    <!-- <section class="client-section ptb-100">
        <div class="container"> -->
            <!--clients logo start-->
            <!-- <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center mb-5">
                        <h2>مورد اعتماد شرکت ها</h2>
                        <p class="lead">
                            به سرعت منابع داخلی یا "آلی" شفاف را شکل دهید در حالی که مکش منابع است
                             تجارت الکترونیکی به راحتی جذاب داخلی را نوآوری کنید.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme clients-carousel dot-indicator">
                        <div class="item single-client">
                            <img src="img/client-5-color.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="img/client-1-color.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="img/client-6-color.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="img/client-3-color.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="img/client-4-color.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="img/client-5-color.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="img/client-7-color.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="img/client-2-color.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="img/client-1-color.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="img/client-3-color.png" alt="client logo" class="client-img">
                        </div>
                    </div>
                </div>
            </div> -->
            <!--clients logo end-->
        <!-- </div>
    </section> -->
    <!--client section start-->

<!-- </div> -->
<!--body content wrap end-->

<!--shape image start-->
<div class="shape-img subscribe-wrap">
    <img src="img/footer-top-shape.png" alt="footer shape" class="img-fluid">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="#" method="post" class="subscribe-form subscribe-form-footer d-none d-md-block d-lg-block">
                    <div class="d-flex align-items-center">
                        <input type="text" class="form-control input" id="email-footer" name="email"
                               placeholder="info@yourdomain.com">
                        <input type="submit" class="button btn solid-btn" id="submit-footer" value="اشتراک">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--shape image end-->

<?php include("includes/layouts/footer.blade.php"); ?>
