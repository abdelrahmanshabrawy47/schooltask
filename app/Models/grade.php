<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grade extends Model
{
    /** @use HasFactory<\Database\Factories\GradeFactory> */
    use HasFactory;
    protected $fillable = [
        'stud_ID',
        'grade',
    ];
    
    public function student()
    {
        return $this->belongsTo(Student::class, 'stud_ID', 'id');
    }
}
