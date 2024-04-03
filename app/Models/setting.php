<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
    use HasFactory;
    protected $table = "settings";
    protected $fillable=['title_en','title','seo_keywords','seo_desc','phone1','phone1','phone2','whatsapp','email','logo','open_hours_en','open_hours','location_en','location','subtitle_en','subtitle','favicon','dr_image_en','dr_image','instagram','twitter','facebook','linkedin','youtube','snapchat','map'];
    public $timestamps = true ;
}
