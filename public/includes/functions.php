<?php  
require_once("libary/jdf.php");

class functions { 
    public function header_to($location) {
        header("Location:{$location}");
    }
    public function header_to_js($location) {
        echo "<script>";
            echo "window.location.href = '{$location}'";
        echo "</script>";
    }
    public function hash_password($password) {
        return Hash::make($password);
    }
    public function check_uniqe_number($number) {
        $query = DB::table("users")->where("mobile_number",$number)->get();
        if ($query->count() > 0) {
            return false;
        } else {
            return true;
        }
    }
    public function get_date() {
        $date = jdate("y/m/d");
        $now = "۱۴".$date;
        return $now;
    }
    public function safe_input($input) {
        $lv1 = htmlspecialchars($input);
        $lv2 = htmlentities($lv1);
        $lv3 = addslashes($lv2);
        $lv4 = strip_tags($lv3);
        return $lv4; 
    }
    public function hash_pass($password) {
        $salt = "0sA@kRp9(J&*";
        $password_hash = $password.$salt;
        $hashed_password = hash("sha256",$password_hash);
        return $hashed_password;

    }
    public function show_alert($text,$type="text") {
        echo "<script>";
        if ($type == "text") {
            echo "Swal.fire('{$text}')";
        } else if ($type == "success") {
            echo "Swal.fire('{$text}', '', 'success')";
        }
        echo "</script>";
    }
    public function check_img_format($img) {
        $valid_format = ["jpg","jpeg","png"];
        $image = explode(".",$img);
        if (count($image) < 2) {
            return false;
        }
        $file_format = end($image);
        $wrong = 0;
        foreach($valid_format as $format) {
            if ($format == $file_format) {
                return true;
            }else {
                $wrong+=1;
                if ($wrong == count($valid_format)){
                    return false;
                }
            }
        }        
    }
}

$functions = new functions();
?>