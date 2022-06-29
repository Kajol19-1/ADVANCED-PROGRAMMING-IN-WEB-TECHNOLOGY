<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;
use App\Models\StudentCourse;

class Student extends Model
{
    use HasFactory;
    protected $table = "student";
    protected $primarykey = "std_id";
    public $incrementing = true;
    public $timestamp = false;
    function department()
    {
        return $this->belongsTo(Department::class, 'dept_id', 'dept_id');
    }
    public function studentcourse()
    {
        return $this->hasMany(StudentCourse::class,'std_id','std_id');
    }
}
