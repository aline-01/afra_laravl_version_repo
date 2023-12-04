<?php include("includes/layouts/header.blade.php"); ?>    
<?php include("includes/functions.php");?>
<?php 

$errors = array();
if (isset($_POST["set_category"])) {
    $name = $_POST["name"];
    if (empty($name)) {
        array_push($errors,"نام را وارد کنید");
    }else if (strlen($name) > 120) {
        array_push($errors,"نام عنوان بیش از حد طولانی است");
    }else {
        $is_valid = DB::table("price_product_category")->where("name",$name)->get();
        if ($is_valid->count() > 0) {
            array_push($errors,"این دسته بندی از قبل مجود است , نام دسته بندی را تغیر دهید یا اینکه دسته بندی فعلی را حذف کنید");
        }
    }

    $picture = $_FILES["picture"];
    $up_path = "img/price_title/".$picture["name"];
    $check_image = $functions->check_img_format($picture["name"]);
    if ($picture["error"] != 0) {
        array_push($errors,"لطفا تصویر را وارد کنید");
    }else if ($check_image == false) {
        array_push($errors,"لطفا یک تصویر معتبر وارد کنید");
    }

    if (empty($errors)) {
        DB::table("price_product_category")->insert([
            "name"=>$name,
            "picture"=>$up_path,
        ]);
        $our_file = move_uploaded_file($picture["tmp_name"],$up_path);
        $functions->header_to_js("/admin/panel/add_category");
    }
    

}

if (isset($_POST["add_product"])) {
    $product_name = $_POST["product_name"];
    if (empty($product_name)) {
        array_push($errors,"نام محصول را وارد کنید");
    }else if (strlen($product_name) > 80) {
        array_push($errors,"نام محصول بیش از حد طولانی است");
    }

    $category = $_POST["category"];
    if (empty($category)) {
        array_push($errors,"لطفا دسته بندی را وارد کنید");
    }else {
        //i this we don't need this code now   
        // $is_category_valid = false;
        // foreach ($all_category as $category1) {
        //     if ($category == $category1) {
        //         $is_category_valid = true;
        //         break;
        //     }else {
        //         continue;
        //     }
        // }
        // if (!$is_category_valid) {
        //     array_push($errors,"");
        // }
    }

    $product_price = $_POST["product_price"];
    if (empty($product_name)) {
        array_push($errors,"قیمت محصول را وارد کنید");
    }


    if (empty($errors)) {
        DB::table("price_product_proc")->insert([
            "name"=>$product_name,
            "price"=>$product_price,
            "category_id"=>$category,
        ]);
        $functions->header_to_js("/admin/panel/add_proc_price");
    }

}

if (isset($_POST["update_product"])) {
    $product_name = $_POST["product_name"];
    if (empty($product_name)) {
        array_push($errors,"نام محصول را وارد کنید");
    }else if (strlen($product_name) > 80) {
        array_push($errors,"نام محصول بیش از حد طولانی است");
    }

    $category = $_POST["category"];
    if (empty($category)) {
        array_push($errors,"لطفا دسته بندی را وارد کنید");
    }else {
        //i this we don't need this code now   
        // $is_category_valid = false;
        // foreach ($all_category as $category1) {
        //     if ($category == $category1) {
        //         $is_category_valid = true;
        //         break;
        //     }else {
        //         continue;
        //     }
        // }
        // if (!$is_category_valid) {
        //     array_push($errors,"");
        // }
    }

    $product_price = $_POST["product_price"];
    if (empty($product_name)) {
        array_push($errors,"قیمت محصول را وارد کنید");
    }


    if (empty($errors)) {
        $update_price = DB::table("price_product_proc")->where("id",$this_price[0]->id)->update([
           "name"=>$product_name,
           "price"=>$product_price,
           "category_id"=>$category, 
        ]);
        $functions->header_to_js("/admin/panel/update_proc_price");
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
                            <form class="mt-4 form-send" enctype="multipart/form-data" action="/admin/panel/Set prices" method="POST">
                            @csrf
                            <center>
                                <h2 class="text-muted">اضافه کردن دسته ها:</h2>  
                            </center>
                            <div class="row">
                                <div class="form-group col-12 col-lg-12">
                                    <p>عنوان:</p>
                                    <input style="text-align: right;" name="name" type="tel" class="form-control address_h" placeholder="عنوان:" name="address_h">
                                </div>
                            </div>
                            <div class="form-group e col-12 col-lg-12">
                                    <p>تصویر:</p>
                                    <input style="text-align: right;" type="file" name="picture" class="form-control " placeholder="عنوان:" name="address_h">
                                </div>
                                <?php if (isset($_POST["set_category"]) && !empty($errors)) { ?>
                                <div class="errors d-flex align-items-center justify-content-center">
                                    <ul>
                                        <?php foreach($errors as $err) { ?>
                                            <li class="alert alert-danger">{{$err}}</li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <?php } ?>
                                <div class="send  text-center "><br>
                                    <input type="submit" name="set_category" style="background-image: linear-gradient(to right, rgba(32, 40, 119, 1), rgba(55, 46, 149, 1), rgba(83, 49, 177, 1), rgba(114, 48, 205, 1), rgba(150, 41, 230, 1));color:white;border-color:white; !important;" class="btn px-5 hvr-push btn-outline-success submit-btn" value="افزودن دسته بندی">
                                </div>
                            </div>
                            </form>
                            <!-- <div class="img_div input-group-btn mt-2">
                                <span class="fileUpload btn btn-info">
                                <span class="upl">
                                    <i class="fa fa-plus" style="font-size: 40px;"></i>
                                </span>
                            <input type="file" class="upload up img_p" name="img20">
                                </span>
                            </div>
                            </div> -->
                            <?php 
                                
                            ?>
                            <form class="mt-4 form-send" enctype="multipart/form-data" <?php if ($this_price == "") { ?>action="/admin/panel/Set prices" <?php }else {  ?> action="/admin/panel/update price/<?php echo $this_price[0]->id; ?>" <?php } ?> method="POST">    
                            @csrf
                            <center>
                                <h2 class="text-muted">:محصولات</h2>
                            </center>
                            <div class="row">
                                <div class="form-group col-12 col-lg-12">
                                    <p>نام محصول:</p>
                                    <input value="<?php if($this_price != "") { echo $this_price[0]->name; } ?>" style="text-align: right;" name="product_name" type="tel" class="form-control address_h" placeholder="مثال:آهن اخبار بازار " name="address_h">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12 col-lg-12">
                                    <p>قیمت:</p>
                                    <input value="<?php if($this_price != "") { echo $this_price[0]->price; } ?>" style="text-align: right;" name="product_price" type="tel" class="form-control address_h" placeholder="مثال:آهن اخبار بازار " name="address_h">
                                </div>
                            </div>
    
                            <div class="form-group col-12 col-lg-12">
                                    <p>دسته بندی:</p>
                                    <select  class="form-control" name="category" id="" value="test123132" aria-label="Default select example" name="" id="">
                                        <?php foreach($all_category as $category){ ?>
                                            <?php echo "<option name='category' value='{$category->id}'>{$category->name}</option>"; ?>
                                        <?php } ?>
                                    </select>
                                    </div>
    
                            <?php if (isset($_POST["add_product"]) && !empty($errors)) { ?>
                            <div class="errors d-flex align-items-center justify-content-center">
                                <ul>
                                    <?php foreach($errors as $err) { ?>
                                           <li class="alert alert-danger">{{$err}}</li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <?php } ?>
                            <div class="send  text-center "><br>
                            <?php if ($this_price == "" || empty($this_price)) { ?>
                                <input type="submit" name="add_product" class="btn px-5 hvr-push btn-outline-success submit-btn" style="background-image: linear-gradient(to right, rgba(32, 40, 119, 1), rgba(55, 46, 149, 1), rgba(83, 49, 177, 1), rgba(114, 48, 205, 1), rgba(150, 41, 230, 1));color:white;border-color:white; !important;" class="btn px-5 hvr-push btn-outline-success submit-btn" value="افزودن محصول">
                            <?php } else { ?>
                                <input type="submit" name="update_product" class="btn px-5 hvr-push btn-outline-success submit-btn" style="background-image: linear-gradient(to right, rgba(32, 40, 119, 1), rgba(55, 46, 149, 1), rgba(83, 49, 177, 1), rgba(114, 48, 205, 1), rgba(150, 41, 230, 1));color:white;border-color:white; !important;" class="btn px-5 hvr-push btn-outline-success submit-btn" value="بروز رسانی محصول">
                            <?Php } ?>
                            
                        </div>
                        </div>
                </div>
            </form>

</div>

</div>
</form>

    </div>

    </div>

    </div>

    </div>
</main>

<?php include("includes/layouts/footer.blade.php"); ?>