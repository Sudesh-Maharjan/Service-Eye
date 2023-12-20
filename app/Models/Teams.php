<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'position',
        'qoute',
        'job_description',
        'interest',
        'urls', // Add 'urls' to the $fillable array,
        "image",
        'is_visible',
    ];
}
