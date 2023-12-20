<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'short_description', 'description', 'image', 'courseDuration', 'Batchstartdate', 'numberseats', 'format', 'course_id'];

    public function coursePrograms()
    {
        return $this->hasMany(CourseProgram::class, 'course_id');
    }

    public function syllabus()
    {
        return $this->hasMany(syllabus::class, 'course_id');
    }

}
