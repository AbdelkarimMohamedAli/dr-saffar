<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class whychooseus extends Model
{
    use HasFactory;
    protected $table = "whychooseuses";
    protected $fillable=['section_title_en','section_title','section_sub_en','section_sub','section_desc_en','section_desc','box_title_1_en','box_title_1','box_title_2_en','box_title_2','box_title_3_en','box_title_3','box_title_4_en','box_title_4','box_counter_1','box_counter_2','box_counter_3','box_counter_4'];
    public $timestamps = true ;
}
