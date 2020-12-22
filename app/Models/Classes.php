<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;

    public function attends()
    {
        return $this->hasMany(Attend::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function leaves()
    {
        return $this->hasMany(Leave::class);
    }
}
