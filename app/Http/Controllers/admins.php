<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Cookie;
use DB;

class admins extends Controller
{
    public function admin_panel($messages=false) {
        $admin_cookie = Cookie::get("admin_access");
        if (empty($admin_cookie)) {
            return redirect("/admin/login");
        }else {
            $comments = DB::table("comments")->where("accepted",0)->get();
            $this_user = DB::table("admins")->where("id",$admin_cookie)->get();
            $all_blogs = DB::table("blogs")->get();
            $all_price_list = DB::table("price_product_proc")->get();
            return view("admins/admins_panel",[
                "this_user"=>$this_user,
                "comments"=>$comments,
                "all_blogs"=>$all_blogs,
                "all_price_list"=>$all_price_list,
                "message"=>$messages,
            ]);
        }
    }
    public function login() {
        return view("admins/admin_login");
    }
    public function logout() {
        $admin_cookie = Cookie::get("admin_access");
        // dd($admin_cookie);
        Cookie::queue(Cookie::make("admin_access",$admin_cookie,-30));
        return redirect("/");
    }
    public function addBlog() {
        $admin_cookie = Cookie::get("admin_access");
        $this_user = DB::table("admins")->where("id",$admin_cookie)->get();
        return view("admins/add_blog",[
            "admin"=>$this_user,
            "title"=>"",
            "old_picture"=>"",
            "content"=>"",
            "category"=>"",
        ]);
    }
    public function opp_comments($opp,$id) {
        if ($opp == "del") {
            $this_row = DB::table("comments")->where("id",$id);
            $this_row->delete();
            return back();
        }else if ($opp == "accept") {
            $this_row = DB::table("comments")->where("id",$id);
            $this_row->update([
                "accepted"=>1,
            ]);
            return back();
        }    
    }
    public function set_prices() {
        $all_categorys = DB::table("price_product_category")->get();
        return view("admins/set_prices",[
            "all_category"=>$all_categorys,
            "this_price"=>"", 
        ]);
    }
    public function edit_blog($id) {
        $this_blog = DB::table("blogs")->where("id",$id)->get();
        return view("admins/add_blog",[
            "this_blog"=>$this_blog,
            "title"=>$this_blog[0]->title,
            "old_picture"=>$this_blog[0]->picture,
            "content"=>$this_blog[0]->content,
            "category"=>$this_blog[0]->category,
        ]);
    }
    public function delete_blog($id) {
        $this_blog = DB::table("blogs")->where("id",$id);
        $this_blog->delete();
        return redirect("/admin/panel/delete blog");
    }
    public function update_prices($id) {
        $this_price = DB::table("price_product_proc")->where("id",$id)->get();
        $all_category = DB::table("price_product_category")->get();
        return view("admins/set_prices",[
            "this_price"=>$this_price,
            "all_category"=>$all_category,
        ]);
    }
    public function del_price($id) {
        $this_price = DB::table("price_product_proc")->where("id",$id);
        $this_price->delete();
        return redirect("/admin/panel/delete price");
    }

}
