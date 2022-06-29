<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;
use App\Models\Course;

class TeacherCourse extends Model
{
    use HasFactory;
    protected $table = "teachercourse";
    protected $primarykey = "teach_crs_id";
    public $incrementing = true;
    public $timestamp = false;
    public function course()
    {
        return $this->belongsTo(Course::class,'course_id','course_id');
    }
    public function teacher()
    {
        return $this->belongsTo(TeacherCourse::class,'teacher_id','teacher_id');
    }
}
