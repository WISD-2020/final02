<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'students';

    public function takes()
    {
        return $this->hasMany(Take::class);
    }

    public function classes()
    {
        return $this->hasMany(Classes::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}

