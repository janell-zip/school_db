<?php

namespace App\Models;

use App\Models\User;
use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'contact_number',
        'address'
    ];

    public function users() {
        return $this->hasOne(User::class);
    }

    public function students() {
        return $this->hasOne(Student::class);
    }
}
