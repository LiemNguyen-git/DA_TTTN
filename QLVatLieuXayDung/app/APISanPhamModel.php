<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class APISanPhamModel extends Model
{
   
    protected $table = 'tblcategory_product';
    protected $fillable = ['category_name', 'category_desc','category_status', 'created_at'];
    protected $primaryKey = 'category_id';
    public $timestamps = false;
    
}
