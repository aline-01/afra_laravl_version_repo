<?php include("includes/layouts/header.blade.php"); ?>
<?php include("includes/layouts/functions.php");?>
<?php 

?>
<main style="margin-top: 120px">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <div class="card border-0 login">
                    <div class="card-body px-5">
                        <form class="shadow-none mt-5 link-dl" action="" method="POST">
                            <br>
                          <div class="input_group my-3">

                              <div class="input-group-prepend">
                                  <div class="input-group-text ">
                                      <small class="text-muted">رمز عبور فعلی</small>
                                  </div>
                                  <input class="form-control" name="current_password" style="font-size: 13px;box-shadow: none " type="password" placeholder="رمز عبور خود را وارد کنید.." >
                              </div><br> 
                              <div class="input-group-prepend">
                                  <div class="input-group-text ">
                                      <small class="text-muted">رمز عبور جدید</small>
                                  </div>
                                  <input class="form-control" name="new_password" style="font-size: 13px;box-shadow: none " type="password" placeholder="رمز عبور خود را وارد کنید.." >
                              </div>
                            </div>

                        <button name="edit" style="background-image: linear-gradient(to right, rgba(32, 40, 119, 1), rgba(55, 46, 149, 1), rgba(83, 49, 177, 1), rgba(114, 48, 205, 1), rgba(150, 41, 230, 1)) !important;" class="btn btn-block mt-4 hvr-pulse-grow" name="submit">تغییر رمز عبور </button>
                      </form>
                 </div>
               
             </div>

         </div>


     </div>

 </div>

</main>

<?php include("includes/layouts/footer.blade.php"); ?>