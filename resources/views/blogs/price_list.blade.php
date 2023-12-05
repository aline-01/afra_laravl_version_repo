<?php include("includes/layouts/header.blade.php"); ?>
<?php include("includes/functions.php"); ?>
<?php 

?>
<link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>
<link href='' rel='stylesheet'>
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
}</style>
<script type='text/javascript' src=''></script>
<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
<script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
<script type='text/javascript'></script> 
<div class="demo">
<br><br><br><br>
<div class="container">
<div class="row">
<?php foreach($all_price_category as $ac) { ?>
<?php $all_prices = DB::table("price_product_proc")->where("category_id",$ac->id)->get(); ?>
<?php if ($all_prices->Count() == 0) { 
    continue; 
  } 
  ?>
<div class="col-md-4 col-sm-6">
<div class="pricingTable blue">
<div class="pricingTable-header" style="height:200px;border-radius:0;background-image:url(/<?php echo $ac->picture ?>);  background-size: 100% 100%;">

<i class="fa fa-diamond"></i>
<!-- <div class="price-value"> $30.00 <span class="month">per month</span> </div> -->
</div>
<h3 class="heading"><?php echo $ac->name; ?></h3>
<div class="pricing-content">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">نام محصول</th>
            <th scope="col">نرخ (ریال)</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($all_prices as $alp) { ?>
          <tr>
            <td><?php echo $alp->name; ?></td>
            <td><?php echo $alp->price; ?></td>
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

<!-- <div class="col-md-4 col-sm-6">
    <div class="pricingTable blue">
    <div class="pricingTable-header" style="border-radius:0;background-image:url('https://ahan1.com/wp-content/uploads/2021/08/%D8%A7%D8%B3%D8%AA%D8%A7%D9%86%D8%AF%D8%A7%D8%B1%D8%AF-%D9%87%D8%A7%DB%8C-%D9%84%D9%88%D9%84%D9%87%E2%80%8C%D9%87%D8%A7%DB%8C-%D9%85%D8%A7%D9%86%DB%8C%D8%B3%D9%85%D8%A7%D9%86.webp');  background-size: 100% 100%;">
    
    <i class="fa fa-diamond"></i>
    <div class="price-value"> $30.00 <span class="month">per month</span> </div>
    </div>
    <h3 class="heading">بلاگ آهن یک</h3>
    <div class="pricing-content">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">نرخ (ریال)</th>
                <th scope="col">نام محصول</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                  <td>۵۲۵,۶۸۸</td>
                  <td>ست آب ۱/۲ اینچ</td>
              </tr>
              <tr>
                  <td>۵۲۵,۶۸۸</td>
                  <td>لوله گالوانیز</td>
              </tr>
              <tr>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
    
    </div>
    <div class="pricingTable-signup">
    <a href="#">sign up</a>
    </div>
    </div>
    </div>
    <div class="col-md-4 col-sm-6">
    <div class="pricingTable blue">
    <div class="pricingTable-header" style="border-radius:0;background-image:url('https://ahan1.com/wp-content/uploads/2021/08/%D8%A7%D8%B3%D8%AA%D8%A7%D9%86%D8%AF%D8%A7%D8%B1%D8%AF-%D9%87%D8%A7%DB%8C-%D9%84%D9%88%D9%84%D9%87%E2%80%8C%D9%87%D8%A7%DB%8C-%D9%85%D8%A7%D9%86%DB%8C%D8%B3%D9%85%D8%A7%D9%86.webp');  background-size: 100% 100%;">
    
    <i class="fa fa-diamond"></i>
    <div class="price-value"> $30.00 <span class="month">per month</span> </div>
    </div>
    <h3 class="heading">بلاگ آهن یک</h3>
    <div class="pricing-content">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">نرخ (ریال)</th>
                <th scope="col">نام محصول</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                  <td>۵۲۵,۶۸۸</td>
                  <td>ست آب ۱/۲ اینچ</td>
              </tr>
              <tr>
                  <td>۵۲۵,۶۸۸</td>
                  <td>لوله گالوانیز</td>
              </tr>
              <tr>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
    
    </div>
    <div class="pricingTable-signup">
    <a href="#">sign up</a>
    </div>
    </div>
    </div>

<div class="col-md-4 col-sm-6">
    <div class="pricingTable blue">
    <div class="pricingTable-header" style="border-radius:0;background-image:url('https://ahan1.com/wp-content/uploads/2021/08/%D8%A7%D8%B3%D8%AA%D8%A7%D9%86%D8%AF%D8%A7%D8%B1%D8%AF-%D9%87%D8%A7%DB%8C-%D9%84%D9%88%D9%84%D9%87%E2%80%8C%D9%87%D8%A7%DB%8C-%D9%85%D8%A7%D9%86%DB%8C%D8%B3%D9%85%D8%A7%D9%86.webp');  background-size: 100% 100%;">
    
    <i class="fa fa-diamond"></i>
    <div class="price-value"> $30.00 <span class="month">per month</span> </div>
    </div>
    <h3 class="heading">بلاگ آهن یک</h3>
    <div class="pricing-content">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">نرخ (ریال)</th>
                <th scope="col">نام محصول</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                  <td>۵۲۵,۶۸۸</td>
                  <td>ست آب ۱/۲ اینچ</td>
              </tr>
              <tr>
                  <td>۵۲۵,۶۸۸</td>
                  <td>لوله گالوانیز</td>
              </tr>
              <tr>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
    
    </div>
    <div class="pricingTable-signup">
    <a href="#">sign up</a>
    </div>
    </div>
    </div> -->
    <!-- <div class="col-md-4 col-sm-6">
    <div class="pricingTable blue">
    <div class="pricingTable-header" style="border-radius:0;background-image:url('https://ahan1.com/wp-content/uploads/2021/08/%D8%A7%D8%B3%D8%AA%D8%A7%D9%86%D8%AF%D8%A7%D8%B1%D8%AF-%D9%87%D8%A7%DB%8C-%D9%84%D9%88%D9%84%D9%87%E2%80%8C%D9%87%D8%A7%DB%8C-%D9%85%D8%A7%D9%86%DB%8C%D8%B3%D9%85%D8%A7%D9%86.webp');  background-size: 100% 100%;">
    
    <i class="fa fa-diamond"></i>
    <div class="price-value"> $30.00 <span class="month">per month</span> </div>
    </div>
    <h3 class="heading">بلاگ آهن یک</h3>
    <div class="pricing-content">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">نرخ (ریال)</th>
                <th scope="col">نام محصول</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                  <td>۵۲۵,۶۸۸</td>
                  <td>ست آب ۱/۲ اینچ</td>
              </tr>
              <tr>
                  <td>۵۲۵,۶۸۸</td>
                  <td>لوله گالوانیز</td>
              </tr>
              <tr>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
    
    </div>
    <div class="pricingTable-signup">
    <a href="#">sign up</a>
    </div>
    </div>
    </div> -->
</div>
</div>
</div>

<br><br>
<?php include("includes/layouts/footer.blade.php") ?>