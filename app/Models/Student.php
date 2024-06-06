<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{   
    protected $table = 'student_tbl';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',	
        'email',
        'admin'
    ];
    use HasFactory;
}
