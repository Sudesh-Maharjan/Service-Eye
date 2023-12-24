<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['id','name', 'short_description', 'description', 'image', 'courseDuration', 'Batchstartdate', 'numberseats', 'format'];

    public function programs()
    {
        return $this->hasMany(CourseProgram::class,'course_id');
    }

    public function syllabuses()
    {
        return $this->hasMany(SyllabusCourse::class, 'course_id');
    }

}
