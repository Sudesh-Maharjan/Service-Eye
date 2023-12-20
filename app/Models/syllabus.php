<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class syllabus extends Model
{
    use HasFactory;
    protected $fillable = ['course_id', 'title', 'description'];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
