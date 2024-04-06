<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctor_section extends Model
{
    use HasFactory;
    protected $table = "doctor_sections";
    protected $fillable=['section_title_en','section_title','section_sub_en','section_sub','section_desc_en','section_desc','section_vector_img','section_dr_img','dr_name_en','dr_name','dr_medical_title_en','dr_medical_title','Qualification_en','Qualification'];
    public $timestamps = true ;
}
