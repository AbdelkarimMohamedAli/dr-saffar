<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;
    protected $table = "blogs";
    protected $fillable=['blog_img','blog_title_en','blog_title','slug','blog_subtitle_en','blog_subtitle','blog_desc_en','blog_desc','blog_keywords','blog_date'];
    public $timestamps = true ;
}
