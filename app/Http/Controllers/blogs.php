<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class blogs extends Controller
{
    public function all_blogs(){
        // $all_blogs = 
        $all_weblogs = DB::table("blogs")->get();
        return view("blogs/all_blogs",[
            "all_blogs"=>$all_weblogs,
        ]);
    }
    public function single_blog($id) {
        $this_blog = DB::table("blogs")->where("id",$id)->get();
        $last_blogs = DB::table("blogs")->latest("id")->take(3)->get();
        $all_comments = DB::table("comments")->where("id",$id)->get();        
        return view("blogs/single",[
            "this_blog"=>$this_blog[0],
            "last_blogs"=>$last_blogs,
            "comments"=>$all_comments,
        ]);
    }
    public function show_price() {
        $prices = DB::table("price_product_category")->get();
        return view("blogs/price_list",[
            "all_price_category"=>$prices,
        ]);
    }
}
