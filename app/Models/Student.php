<?php

namespace App\Models;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_number',
        'year_level',
    ];

    public function profiles() {
        return $this->belongsTo(Profile::class);
    }
}
