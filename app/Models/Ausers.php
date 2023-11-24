<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ausers extends Model
{
    protected $table = "users";
    protected $fillable = ["fl_name","mobile_number","corp_name","side","address","state","need_product","password","register_date","last_login"];


}
