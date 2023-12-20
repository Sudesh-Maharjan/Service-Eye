<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseProgram extends Model
{
    use HasFactory;
    protected $fillable = ['course_id', 'title', 'description', 'icon'];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
