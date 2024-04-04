<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testimonial extends Model
{
    use HasFactory;
    protected $table = "testimonials";
    protected $fillable=['img','comment','comment_name','comment_from'];
    public $timestamps = true ;
}
