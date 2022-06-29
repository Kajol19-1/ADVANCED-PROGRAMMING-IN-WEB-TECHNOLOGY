<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $table="student";
    function department()
    {
        return $this->belongsTo(department::class,'d_id','d_id');
    }
}
