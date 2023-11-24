<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Cookie;
use DB;

class admins extends Controller
{
    public function admin_panel() {
        $admin_cookie = Cookie::get("admin_access");
        if (empty($admin_cookie)) {
            return redirect("/admin/login");
        }else {
            $comments = DB::table("comments")->where("accepted",0)->get();
            $this_user = DB::table("admins")->where("id",$admin_cookie)->get();
            return view("admins/admins_panel",[
                "this_user"=>$this_user,
                "comments"=>$comments,
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
        return view("admins/set_prices");
    }

}
