<?php include("includes/layouts/header.blade.php"); ?>
<?php include("includes/functions.php"); ?>
<?php 


?>
<!-- we must make this code there becuse it's destroy our header in other page -->
<link rel='stylesheet' id='bootstrap-css' href='/css/admin_panel/bootstrap.min.css' type='text/css' media='all' /> 

<main style="margin-top:100px;">
    <div class="container my-3">
    <div class="row">
        <div class="col-12 col-lg-3 iransans">
            <div class="card border-0 mb-4 profile">
                <div class="card-body text-center ">
                <img class="img_set" style="cursor:pointer;" src="data:image/png;base64,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" class="img-fluid mx-auto d-block">
                <form action="#" method="POST" class="upload_form" enctype="multipart/form-data">
                    <input type="file" class="set_img_form" value="تنظیم تصویر" name="user_image" style="display:none">
                    <input type="text" name="set_image" style="display:none">
                </form>
                <script>
                const SET_IMAGE = document.querySelector(".img_set")
                const FORM = document.querySelector(".upload_form")
                const SET_BTN = document.querySelector(".set_img_form")
                console.log(SET_BTN)
                SET_IMAGE.addEventListener("click",(add_image)=>{
                    SET_BTN.select();
                    // FORM.submit();
                },false)
                
                </script>
                   <small class="d-block mt-3"><?php echo $this_user[0]->fl_name; ?></small>
                </div>
               <div class="card-footer text-center d-flex justify-content-between align-items-center border-0 shadow-none py-3">
                   <a href="/users/change_pass"  class="border-left px-2 font-sm">تغییر رمز عبور</a>
                   <a href="/users/logout" class="font-sm"  style="margin-left: 30px " > خروج از حساب</a>

               </div>
            </div>
            <div class="card border-0 profile-side">
                <div class="card-header bg-transparent  pt-0">
                    <p class="mb-0 px-2 py-1 font-sm" style="background: linear-gradient(to right, rgba(32, 40, 119, 1), rgba(55, 46, 149, 1), rgba(83, 49, 177, 1), rgba(114, 48, 205, 1), rgba(150, 41, 230, 1)) !important;">دسترسی های کاربری </p>
                    
                </div>
                 <div class="card-body px-8">
                     <ul class="nav flex-column pr-0">
                         <li class="nav-item mb-2">
                             <a href="#profile " class="nav-link active font-sm active" data-toggle="tab">
                                 <i class="fa fa-user-circle font-md align-middle" aria-hidden="true"></i>

                                 پروفایل کاربری

                             </a>
                         </li>
                         <li class="nav-item mb-2">
                             <a href="#request " class="nav-link active font-sm active" data-toggle="tab">
                                 <i class="fa fa-user-circle font-md align-middle" aria-hidden="true"></i>

                                 ثبت سفارش 
                             </a>
                         </li>

                         <!-- <li class="nav-item mb-2">
                             <a href="#agahiman " class="nav-link  font-sm " data-toggle="tab">
                                 <i class="fa fa-eye font-md align-middle" aria-hidden="true"></i>

                                آگهی های من

                             </a>
                         </li> -->
                         <!-- <li class="nav-item mb-2">
                             <a href="#agahi_mordealaghe " class="nav-link  font-sm " data-toggle="tab">
                                 <i class="fa fa-heart font-md align-middle" aria-hidden="true"></i>

                                آگهی ها مورد علاقه ام

                             </a>
                         </li> -->
                         <li class="nav-item mb-2">
                             <a href="#etelate_shakhsi " class="nav-link font-sm " data-toggle="tab">
                                 <i class="fa fa-address-card font-md align-middle" aria-hidden="true"></i>

                                 اطلاعات شخصی
                             </a>
                         </li>
                         <!-- <li class="nav-item mb-2">
                             <a href="https://suiet.com/%d8%a7%d8%b1%d8%b3%d8%a7%d9%84-%d8%a2%da%af%d9%87%db%8c/" class="nav-link font-sm ">
                                 <i class="fa fa-address-card font-md align-middle" aria-hidden="true"></i>

                                 ثبت آگهی
                             </a>
                         </li> -->
                     </ul>

                 </div>
            </div>

        </div>
        <div class="col-12 col-lg-9 py-4">
            <div class="tab-content">
                <div class="tab-pane fade show active  " id="profile">
                    <div class="row">
                        <div class="col-12 col-lg-9">
                            <div class="card border-0 profile-side ">
                                <div class="card-header bg-transparent border-0 pt-0">
                                    <p class="mb-0 px-2 py-1 font-sm" style="background-image: linear-gradient(to right, rgba(32, 40, 119, 1), rgba(55, 46, 149, 1), rgba(83, 49, 177, 1), rgba(114, 48, 205, 1), rgba(150, 41, 230, 1)) !important;">اطلاعات شخصی</p>

                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-3 user-info">
                                        <div>
                                            <p class="font-sm">نام و نام خانوادگی:</p>
                                            <p class="font-md"><?php echo $this_user[0]->fl_name; ?></p>
                                        </div>
                                        <div>
                                            <p class="font-sm">شماره تلفن همراه:</p>
                                            <p class="font-md"><?php echo $this_user[0]->mobile_number; ?></p>
                                        </div>
                                        <div>
                                            <p class="font-sm">استان:</p>
                                            <p class="font-md"><?php echo $this_user[0]->state; ?></p>
                                        </div>

                                    </div>
                                    <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-3 user-info">
                                        <div>
                                            <p class="font-sm" > نام شرکت :</p>
                                            <p class="font-md"><?php echo $this_user[0]->corp_name; ?></p>
                                            </div>
                                        <div>
                                            <p class="font-sm">تاریخ عضویت :</p>
                                            <p class="font-md"><?php echo $this_user[0]->register_date; ?></p>
                                        </div>
                                        <div>
                                            <p class="font-sm">تاریخ آخرین ورود :</p>
                                            <p class="font-md"><?php echo $this_user[0]->last_login; ?></p>
                                        </div>

                                    </div>
                                    <!-- <div class="d-flex justify-content-between align-items-center  user-info">
                                        <div>
                                            <p class="font-sm">دریافت خبر نامه :</p>
                                            <p class="font-md">بله </p>
                                        </div>
                                        <div>
                                            <p class="font-sm">دریافت پیامک:</p>
                                            <p class="font-md">خیر</p>
                                        </div>
                                        <div>
                                            <p class="font-sm">دریافت نوتیفکشن:</p>
                                            <p class="font-md">بله </p>
                                        </div>

                                    </div> -->

                                </div>
                                <div class="card-footer border-0 py-3  text-center info-user-footer">
                                    <a href="http://localhost:2211/?page_id=29#etelate_shakhsi" style="color:  rgba(83, 49, 177, 1);, rgba(114, 48, 205, 1), rgba(150, 41, 230, 1)) !important;" class="font-md" >ویرایش اطلاعات شخصی</a>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                                <div class="tab-pane fade " id="agahiman">
                    <div class="card border-0 agahiman">
                        <div class="card-header bg-transparent pt-0">
                         <p class="mb-0 px-2 py-1 font-md">آگهی های من</p>
                        </div>
                        <div class="card-body">
                            <table class="table table-borderless table-striped text-center table-responsive-md">
                              <thead>
                              <tr class="font-md">
                                  <th> ردیف:</th>
                                  <th> شماره آگهی:</th>
                                  <th> تاریخ آگهی های بارگزاری شده:</th>
                                  <th> وضعیت آگهی:</th>
                                  <th> مبلغ کل :</th>
                                  <th> عملیات پرداخت:</th>
                                  <th> مشاهده آگهی:</th>
                              </tr>
                              </thead>
                                <tbody>
                                                                                        <tr class="" style="font-size: 12px">
                                    <td>1</td>
                                    <td>su-4664615386</td>
                                    <td>۱۴۰۲-۰۶-۱۰</td>
                                                                            <td class="text-success">تایید</td>
                                                                        <td>رایگان</td>
                                    <td class="text-success">پرداخت شده</td>
                                    <td><a href="#">نمایش</a></td>
                                </tr>
                                                            <!-- <tr class="" style="font-size: 12px">
                                    <td>2</td>
                                    <td>su-235489534</td>
                                    <td>20تیر1401</td>
                                    <td class="text-warning">درحال بررسی</td>
                                    <td>20هزارتومان</td>
                                    <td class="text-success">پرداخت شده</td>
                                    <td><a href="#">نمایش</a></td>
                                </tr>
                                <tr class="" style="font-size: 12px">
                                    <td>3</td>
                                    <td>su-235489534</td>
                                    <td>20تیر1401</td>
                                    <td class="text-danger">تایید نشد</td>
                                    <td>20هزارتومان</td>
                                    <td class="text-danger">پرداخت نشده</td>
                                    <td><a href="#">نمایش</a></td>
                                </tr>
                                <tr class="" style="font-size: 12px">
                                    <td>4</td>
                                    <td>su-235489534</td>
                                    <td>20تیر1401</td>
                                    <td class="text-danger">  تایید نشد</td>
                                    <td>20هزارتومان</td>
                                    <td class="text-danger">پرداخت نشده</td>
                                    <td><a href="#">نمایش</a></td>
                                </tr> -->
                                </tbody>

                            </table>


                        </div>
                    </div>

                </div>
                <div class="tab-pane fade   " id="agahi_mordealaghe">
                    <div class="card border-0 agahi_mordealaghe">
                        <div class="card-header bg-transparent border-0 pt-0">
                        <p class="mb-0 px-2 py-1 font-md">آگهی های مورد علاقه ام</p>
                        </div>
                                                <div class="card-body">
                                                                                <a href="http://localhost:2211/?page_id=62&id=6">
                                <div class="d-flex justify-content-between align-items-center border-bottom py-2 info-user2">
                                    <div class="d-flex align-items-center">
                                        <img src="http://localhost:2211/wp-content/themes/suiet%20v2/suiet%20v2/images/adver-img/test_suiet9.jpg" alt="agahi_mordealaghe" class="img-fluid ml-lg-2" style="border-radius: 15px; width: 10em">
                                        <div>
                                            <small class="d-block text-center text-dark">تهران</small>
                                            <small class="d-block text-danger py-2">خونه ویلایی دربست یک طبقه ۲۶۲متر</small>
                                            <small class="d-block text-success py-2">خریدوفروش خانه و آپارتمان</small>
                                            <small class="d-block text-muted py-2"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                                دقایقی پیش در اصفهان، بهرام‌آباد                                            </small>
                                        </div>

                                    </div>
                                    <div>
                                        <a href="https://suiet.com/%d8%aa%d8%a8%d9%84%db%8c%d8%ba%d8%a7%d8%aa-%d8%b1%d8%a7-%d8%ad%d8%b0%d9%81-%da%a9%d9%86%db%8c%d8%af/?adver_id=6" class="trash"><i class="fa fa-trash align-middle" aria-hidden="true"></i>
                                        </a>
                                    </div>

                                </div>
                            </a>
                                                </div>
                        <div class="card-footer text-center border-0 info-user-footer">
                            <a href="#" class="font-md" >حذف و ویرایش علاقه مندی ها</a>
                        </div>
                    </div>
                </div>
                <!-- ---------------------------------------------------------------------------------------- -->
                <div class="tab-pane fade   " id="etelate_shakhsi">
                      <div class="card border-0 etelate_shakhsi">
                          <div class="card-header bg-transparent border-0 pt-0">
                              <p class="mb-0 px-2 py-1 font-md" style="background-image: linear-gradient(to right, rgba(32, 40, 119, 1), rgba(55, 46, 149, 1), rgba(83, 49, 177, 1), rgba(114, 48, 205, 1), rgba(150, 41, 230, 1)) !important;">اطلاعات شخصی</p>

                          </div>
                          <div class="card-body">
                              <div class="size">
                                  <form action="https://suiet.com/%d9%be%d9%86%d9%84-%da%a9%d8%a7%d8%b1%d8%a8%d8%b1%db%8c/" method="POST">
                                      <div class="row">
                                          <div class="form-group col-12 col-lg-6">
                                              <div class="input-group">
                                                  <div class="input-group-prepend">
                                                      <div class="input-group-text bg-white ">
                                                          <small class="text-muted font-md">نام:</small>
                                                      </div>
                                                  </div>
                                                  <input type="text" value="بردران ایزدی به غیر از سیروس" name="new_name" class="form-control " style="font-size: 13px" value="امین">
                                              </div>
                                          </div>
                                          <div class="form-group col-12 col-lg-6">
                                              <div class="input-group">
                                                  <div class="input-group-prepend">
                                                      <div class="input-group-text bg-white ">
                                                          <small class="text-muted font-md">تلفن همراه:</small>
                                                      </div>
                                                  </div>
                                                  <input type="text" value="09197508922" name="new_number" class="form-control " style="font-size: 13px" value="09131234567">
                                              </div>
                                          </div>
                                          <div class="form-group col-12 col-lg-6">
                                              <div class="input-group">
                                                  <div class="input-group-prepend">
                                                      <div class="input-group-text bg-white ">
                                                          <small class="text-muted font-md">نام شرکت:</small>
                                                      </div>
                                                  </div>
                                                  <input type="text" value="09197508922" name="new_number" class="form-control " style="font-size: 13px" value="09131234567">
                                              </div>
                                          </div>

                                    <div class="form-group col-12 col-lg-6">
                                              <div class="input-group">
                                                  <div class="input-group-prepend">
                                                      <div class="input-group-text bg-white ">
                                                          <small class="text-muted font-md">نام مشاور املاک</small>
                                                      </div>
                                                  </div>
                                                  <input type="text" value="alien" name="state_name" class="form-control " style="font-size: 13px" value="09131234567">
                                              </div>
                                          </div>
                                                                                    <div class="col-12 text-center py-2  btn btn-block  sabte_etelat">
                                                                                     <button style="background-image: linear-gradient(to right, rgba(32, 40, 119, 1), rgba(55, 46, 149, 1), rgba(83, 49, 177, 1), rgba(114, 48, 205, 1), rgba(150, 41, 230, 1)) !important;" name="change_information" class="btn btn-block hvr-pulse-shrink"><a href="https://suiet.com/%d9%be%d9%86%d9%84-%da%a9%d8%a7%d8%b1%d8%a8%d8%b1%db%8c/">
                                                  ثبت اطلاعات <i class="fa fa-chevron-left align-middle" aria-hidden="true"></i></a></button>

                                          </div>

                                      </div>

                                  </form>

                              </div>

                          </div>

                      </div>

                 </div>

            </div>
            

        </div>

    </div>

</div>

</main>

<?php include("includes/layouts/footer.blade.php"); ?>
