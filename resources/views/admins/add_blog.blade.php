<?php include("includes/layouts/header.blade.php"); ?>    
<?php include("includes/functions.php");?>
<?php 

if (isset($_POST["submit"])) {
    $errors = array();
    
    $title = $functions->safe_input($_POST["title"]);
    if (empty($title)) {
        array_push($errors,"عنوان را وارد کنید");
    }else if (strlen($title) > 30) {
        array_push($errors,"عنوان بیش از حد طولانی است");
    } else if (strlen($title) < 3) {
        array_push($errors,"عنوان کوتاه است");
    }

    $picture = $_FILES["picture"];
    $up_picture = "img/blog/".$picture["name"];
    $check_image = $functions->check_img_format($picture["name"]);
    if ($picture["error"] != 0) {
        array_push($errors,"لطفا تصویر را وارد کنید");
    }
    if ($check_image == false) {
        array_push($errors,"لطفا یک تصویر معتبر وارد کنید");
    }

    $content = $functions->safe_input($_POST["content"]);
    if (empty($content)) {
        array_push($errors,"لطفا محتوای وبلاگ را بنویسید");
    }
    
    $category = $functions->safe_input($_POST["category"]);
    if (empty($category)) {
        $category = "not_set";
    }

    $writer = $admin[0]->id;
    
    $send_time = $functions->get_date();

    if (empty($errors)) {
        DB::table("blogs")->insert([
            "title"=>$title,
            "content"=>$content,
            "picture"=>$up_picture,
            "qute"=>"not_set",
            "category"=>$category,
            "writer"=>$writer,
            "send_time"=>$send_time,
        ]);
        $is_moved = move_uploaded_file($picture["tmp_name"],$up_picture);
        if ($is_moved) {
            $functions->header_to_js("/admin/panel");
        }else {
            array_push($errors,"قادر به بارگذاری تصویر نیست دوباره امتحان کنید");
        }
    }




}

?>



<script>
    // Swal.fire('اگهی شما با موفقیت ارسال شد پس از تایید رو سایت قرار میگیرد')
</script>
<style>
    @font-face {
        font-family: "iransans";
        src: url("font/IRANSansWeb_Medium.eot");
        src: url("font/IRANSansWeb_Medium.woff") format("woff");
        
    }
    .iransans{
        font-family: IRANSans;
    }
</style>
<main style="margin-top: 168px">
    <div class="container ">
        <div class="row">
            <div class="col-12 ">
                <div class="card mb-5">
                    <div class="card-body">                                
                            <form class="mt-4 form-send" enctype="multipart/form-data" action="#" method="POST">    
                            @csrf   
                            <div class="row">
                                <div class="form-group col-12 col-lg-12">
                                    <p>عنوان:</p>
                                    <input style="text-align: right;" name="title" type="tel" class="form-control address_h" placeholder="عنوان:" name="address_h">
                                </div>
                            </div>
                            <div class="form-group e col-12 col-lg-12">
                                    <p>تصویر:</p>
                                    <input style="text-align: right;" type="file" name="picture" class="form-control " placeholder="عنوان:" name="address_h">
                                </div>
                            </div>
                            <!-- <div class="img_div input-group-btn mt-2">
                                <span class="fileUpload btn btn-info">
                                <span class="upl">
                                    <i class="fa fa-plus" style="font-size: 40px;"></i>
                                </span>
                            <input type="file" class="upload up img_p" name="img20">
                                </span>
                            </div>
                            </div> -->

                     
                            <div class="row">
                                <div class="form-group col-12">
                                    <p>محتوا :</p>
                                    <textarea name="content" class="form-control w-100 d-block description" cols="50" rows="10"
                                    style="resize: none;"></textarea>      
                            <div class="row">
                                <div class="form-group col-12 col-lg-12">
                                    <p>دسته بندی:</p>
                                    <input style="text-align: right;" name="category" type="tel" class="form-control address_h" placeholder="مثال:آهن اخبار بازار " name="address_h">
                                </div>
                            </div>
    
                            <?php if (isset($_POST["submit"]) && !empty($errors)) { ?>
                            <div class="errors d-flex align-items-center justify-content-center">
                                <ul>
                                    <?php foreach($errors as $err) { ?>
                                        <li class="alert alert-danger">{{$err}}</li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <?php } ?>
                            <div class="send  text-center "><br>
                                <input type="submit" name="submit" style="background-image: linear-gradient(to right, rgba(32, 40, 119, 1), rgba(55, 46, 149, 1), rgba(83, 49, 177, 1), rgba(114, 48, 205, 1), rgba(150, 41, 230, 1));color:white;border-color:white; !important;" class="btn px-5 hvr-push btn-outline-success submit-btn" value="ارسال وبلاگ">
                            </div>
                        </div>
                </div>

</div>

</div>
</form>

    </div>

    </div>

    </div>

    </div>
</main>

<?php include("includes/layouts/footer.blade.php"); ?>