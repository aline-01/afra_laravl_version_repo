<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users;
use App\Http\Middleware\check_user_access;
use App\Http\Controllers\admins;
use App\Http\Controllers\blogs;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // dd($last_blogs);
    $last_blogs = DB::table("blogs")->latest("id")->take(6)->get();
    // $prices = DB::table("")
    return view('index',[
        "last_blogs"=>$last_blogs,

    ]);
});

Route::prefix("/info")->group(function() {
    Route::get("/contact",function() {
        return view("site_info.contact");
    });
    Route::get("/about us",function() {
        return view("site_info.about_us");
    });
});

Route::prefix("/blog")->group(function() {
    $blog_ctl = "";
    // Route::get("blog")
});

Route::prefix("/users")->group(function() {
    $user_ctl = "App\Http\Controllers\users";
    Route::get("/sign_up",$user_ctl."@sign_up");
    Route::post("/sign_up",$user_ctl."@sign_up");
    Route::get("/login",$user_ctl."@login");
    Route::post("/login",$user_ctl."@login");
    Route::get("/panel",$user_ctl."@users_panel");
    Route::get("/logout",$user_ctl."@logout");
    Route::get("/change_pass",$user_ctl."@change_pass");
    Route::post("/change_pass",$user_ctl."@change_pass");

});

Route::prefix("/admin")->group(function() {
    $admins_ctl = "App\Http\Controllers\admins";
    Route::get("/panel",$admins_ctl."@admin_panel");
    Route::get("/login",$admins_ctl."@login");
    Route::post("/login",$admins_ctl."@login");
    Route::get("/logout",$admins_ctl."@logout");
    Route::get("/panel/addBlog",$admins_ctl."@addBlog");
    Route::post("/panel/addBlog",$admins_ctl."@addBlog");
    Route::get("/comment-opp/{opration}/{id}",$admins_ctl."@opp_comments");
    Route::get("/panel/Set prices",$admins_ctl."@set_prices");
});

Route::prefix("/blog")->group(function() {
    $blog_ctl = "App\Http\Controllers\blogs";
    Route::get("/All Blogs",$blog_ctl."@all_blogs");
    Route::get("/Blog/{title}",$blog_ctl."@single_blog");
    Route::post("/Blog/{title}",$blog_ctl."@single_blog");
});

Route::get("/test","App\Http\Controllers\users@test");
