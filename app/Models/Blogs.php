<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'image', 'description','created_at'];
    public function getTitleAttribute($value)
    {
   
        return ucfirst($value); 
    }
    public function getCreatedAtAttribute($value)
    {
       
       
        return date("d-M-Y", strtotime($value));
    }
}
