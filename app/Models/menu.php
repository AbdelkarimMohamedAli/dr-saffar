<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;
    protected $table = "menus";
    protected $fillable=['label','ar_translate','link','parent','sort'];
    public $timestamps = true ;
}
