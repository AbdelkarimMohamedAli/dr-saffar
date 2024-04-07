<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;
    
    protected $table = "services";
    protected $fillable=['services_title_en','services_title','slug','services_img','services_desc_en','services_desc','services_icon','services_subtitle_en','services_subtitle','services_seo_keywords'];
    public $timestamps = true ;
}
