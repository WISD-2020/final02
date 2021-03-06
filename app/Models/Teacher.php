<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function leaves()
    {
        return $this->hasMany(Leave::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
