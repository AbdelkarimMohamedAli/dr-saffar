<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class banner_section extends Model
{
    use HasFactory;
    protected $table = "banner_sections";
    protected $fillable=['title_en','title'];
    public $timestamps = true ;
}

