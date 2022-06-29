<?php

namespace App\Models;
use App\Models\student;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class depertment extends Model
{
    use HasFactory;
    protected $table="department";
    function student()
    {
        return $this->hasMany(student::class,'d_id','d_id'); //relationship function
    }
}
