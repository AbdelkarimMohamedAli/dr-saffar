<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    use HasFactory;
    protected $table = "sliders";
    protected $fillable=['slider_image','slider_content1_en','slider_content2_en','slider_content3_en','slider_content1','slider_content2','slider_content3'];
    public $timestamps = true ;

}
