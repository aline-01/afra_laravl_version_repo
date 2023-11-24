<?php
namespace App\Http\Controllers;
use Cookie;
use DB;
use Illuminate\Http\Request;
use App\Models\Ausers;

class users extends Controller
{
    public function sign_up() {
        $users_cookie = Cookie::get("users_access");
        if (!empty($users_cookie)) {
            return redirect("/");
        }
        return view("users/sign_up");
    }
    public function login() {
        $users_cookie = Cookie::get("users_access");
        if (!empty($users_cookie)) {
            return redirect("/");
        }   
        return view("users/login");
    }
    public function users_panel() {
        $users_cookie = Cookie::get("users_access");
        if (empty($users_cookie)) {
            return redirect("/users/login");
        }
        $this_user = DB::table("users")->where("id",$users_cookie)->get();
        return view("users/user_panel",[
            "this_user"=>$this_user,
        ]);
    }
    public function logout() {
        $value = Cookie::get("users_access");
        Cookie::queue(Cookie::make("users_access",$value,-30));
        return redirect("/");
    }
    public function change_pass() {
        $user_cookie = Cookie::get("users_access");
        $this_user = DB::table("users")->where("id",$user_cookie)->get();
        // $hashed_password = "df65c2d8f68c1dd2e135496d2023ed2167d8c01997e528cd85316d234038f9b6";
        // $this_user1 = DB::table("users")->where("id",$this_user[0]->id)->where("password",$hashed_password)->get();
        // dd($this_user1);
        if (empty($user_cookie) || $this_user->Count() == 0) {
            return redirect("/");
        }else {
            return view("users/change-password",[
                "this_user"=>$this_user,
            ]);
        }
        
    }
    public function test() { 
        // $this_cookie = Cookie::get("users_access");
        // $last_user = Ausers::latest($this_cookie)->get();
        $last_user = DB::table('users')->where(['mobile_number'=>"09197508922"])->orderBy('id', 'desc')->first();
        
        var_dump($last_user->id);
    }

}
